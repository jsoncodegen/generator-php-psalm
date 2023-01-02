import {
	IGeneratorResult,
	IInterface,
	TNamedType,
} from 'jsoncodegen-types-for-generator'
import { BUILDER_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { templateOfInterfaceBuilder } from '../template/templateOfInterfaceBuilder'
import { capitalize } from './capitalize'
import { fieldTypeToString } from './fieldTypeToString'
import { indent } from './indent'
import { join } from './join'
import { joinArrayWith } from './joinArrayWith'
import { joinWith } from './joinWith'
import { lineBreakBefore } from './lineBreakBefore'
import { makeComment } from './makeComment'

export async function generateInterfaceBuilder(
	config: IConfig,
	namedTypesById: Map<string, TNamedType>,
	info: IInterface,
): Promise<IGeneratorResult> {
	const {
		directoryPath,
		description: interfaceDescription,
		fields: interfaceFields,
		name: interfaceName,
	} = info
	const interfaceBuilderName = interfaceName + 'Builder'
	const namespaceDecl = `namespace ${joinWith('\\')(
		config.namespaceBase,
		BUILDER_FOLDER_NAME,
		...directoryPath,
	)};`
	const requiredFields = interfaceFields.filter(
		(field) => !field.fieldType.isNullable,
	)
	const fieldDeclarations = joinArrayWith(`\n`)(
		interfaceFields.map((field) => {
			return lineBreakBefore(
				indent(
					joinWith(`\n`)(
						makeComment(
							joinWith('\n')(
								field.description,
								joinWith(' ')(
									'@var',
									join(
										fieldTypeToString(config, namedTypesById, field.fieldType),
										field.fieldType.isNullable ? '' : '|null',
									),
								),
							),
						),
						joinWith(` `)('private', join('$', field.name, ' = null;')),
					),
				),
			)
		}),
	)
	const comment = makeComment(
		joinWith('\n')(
			interfaceDescription,
			...requiredFields.map((field) => `@template __Has_${field.name}__`),
		),
	)
	const gettersAndSetters = joinArrayWith('\n\n')(
		interfaceFields.map((field) => {
			const newStateType = join(
				interfaceBuilderName,
				requiredFields.length
					? join(
							'<',
							joinArrayWith(', ')(
								requiredFields.map((field2) =>
									field === field2 ? `"OK"` : `__Has_${field2.name}__`,
								),
							),
							'>',
					  )
					: '',
			)
			return joinWith('\n\n')(
				indent(
					joinWith('\n')(
						makeComment(
							joinWith('\n')(
								field.description,
								joinWith(' ')(
									`@return`,
									join(
										fieldTypeToString(config, namedTypesById, field.fieldType),
										field.fieldType.isNullable ? '' : '|null',
									),
								),
							),
						),
						join('public function get', capitalize(field.name), '()'),
						'{',
						indent(join('return $this->', field.name, ';')),
						'}',
					),
				),
				indent(
					joinWith('\n')(
						makeComment(
							joinWith('\n')(
								field.description,
								joinWith(' ')(
									`@param`,
									fieldTypeToString(config, namedTypesById, field.fieldType),
									'$value',
								),
								joinWith(' ')(`@return`, newStateType),
							),
						),
						join('public function set', capitalize(field.name), '($value)'),
						'{',
						indent(
							joinWith('\n')(
								join('$this->', field.name, ' = $value;'),
								makeComment(joinWith(' ')('@var', newStateType, '$that')),
								'$that = $this;',
								'return $that;',
							),
						),
						'}',
					),
				),
			)
		}),
	)
	const builderDeclaration = templateOfInterfaceBuilder({
		namespaceDecl,
		comment,
		interfaceBuilderName,
		fieldDeclarations,
		gettersAndSetters,
	})
	return {
		filePath: [
			BUILDER_FOLDER_NAME,
			...directoryPath,
			interfaceBuilderName + `.php`,
		],
		content: builderDeclaration,
	}
}
