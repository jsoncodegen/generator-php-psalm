import {
	IGeneratorResult,
	IInterface,
	TNamedType,
} from 'jsoncodegen-types-for-generator'
import { IConfig } from '../model/IConfig.js'
import { BUILDER_FOLDER_NAME, TYPE_FOLDER_NAME } from '../model/constants.js'
import { templateOfInterface } from '../template/templateOfInterface.js'
import { capitalize } from './capitalize.js'
import { fieldTypeToString } from './fieldTypeToString.js'
import { generateInterfaceAssert } from './generateInterfaceAssert.js'
import { generateInterfaceBuilder } from './generateInterfaceBuilder.js'
import { indent } from './indent.js'
import { join } from './join.js'
import { joinArrayWith } from './joinArrayWith.js'
import { joinWith } from './joinWith.js'
import { lineBreakBefore } from './lineBreakBefore.js'
import { makeComment } from './makeComment.js'

export async function generateInterface(
	config: IConfig,
	namedTypesById: Map<string, TNamedType>,
	info: IInterface,
): Promise<IGeneratorResult[]> {
	const {
		directoryPath,
		description: interfaceDescription,
		fields: interfaceFields,
		name: interfaceName,
	} = info
	const namespaceDecl = `namespace ${joinWith('\\')(
		config.namespaceBase,
		TYPE_FOLDER_NAME,
		...directoryPath,
	)};`
	const fieldDeclarations = joinArrayWith(`\n`)(
		interfaceFields.map((field) => {
			return lineBreakBefore(
				indent(
					joinWith(`\n`)(
						makeComment(
							joinWith('\n')(
								field.description,
								'@readonly',
								joinWith(' ')(
									'@var',
									fieldTypeToString(config, namedTypesById, field.fieldType),
								),
							),
						),
						joinWith(` `)('public', join('$', field.name, ';')),
					),
				),
			)
		}),
	)
	const comment = makeComment(interfaceDescription)
	const requiredFields = interfaceFields.filter(
		(field) => !field.fieldType.isNullable,
	)
	const builderGenericsAllOk = join(
		'\\',
		joinWith('\\')(
			config.namespaceBase,
			BUILDER_FOLDER_NAME,
			...directoryPath,
			info.name,
		),
		'Builder',
		requiredFields.length
			? join('<', joinArrayWith(', ')(requiredFields.map((_) => `"OK"`)), '>')
			: '',
	)
	const variables = indent(
		indent(
			joinArrayWith('\n')(
				interfaceFields.map((field) =>
					join(
						'$builder_',
						field.name,
						` = $builder->get`,
						capitalize(field.name),
						'();',
					),
				),
			),
		),
	)
	const validations = indent(
		indent(
			joinArrayWith('\n')(
				interfaceFields.map((field) =>
					field.fieldType.isNullable
						? ''
						: joinWith(' ')(
								'if',
								join('(', join(`is_null($builder_`, field.name, ')'), ')'),
								join(
									'throw new \\Exception(',
									"'",
									interfaceName,
									': ',
									field.name,
									' must not be null.',
									"'",
									');',
								),
						  ),
				),
			),
		),
	)
	const copyValuesFromBuilder = indent(
		indent(
			joinArrayWith('\n')(
				interfaceFields.map((field) =>
					joinWith(' ')(
						join(`$this->`, field.name),
						'=',
						join(`$builder_`, field.name, ';'),
					),
				),
			),
		),
	)
	const interfaceDeclaration = templateOfInterface({
		namespaceDecl,
		comment,
		interfaceName,
		fieldDeclarations,
		builderGenericsAllOk,
		variables,
		validations,
		copyValuesFromBuilder,
	})
	return [
		{
			filePath: [TYPE_FOLDER_NAME, ...directoryPath, interfaceName + `.php`],
			content: interfaceDeclaration,
		},
		await generateInterfaceBuilder(config, namedTypesById, info),
		await generateInterfaceAssert(config, info),
	]
}
