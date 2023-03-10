import {
	IGeneratorResult,
	IInterface,
	TNamedType,
} from 'jsoncodegen-types-for-generator'
import { BUILDER_FOLDER_NAME, TYPE_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { templateOfInterface } from '../template/templateOfInterface'
import { capitalize } from './capitalize'
import { fieldTypeToString } from './fieldTypeToString'
import { generateInterfaceAssert } from './generateInterfaceAssert'
import { generateInterfaceBuilder } from './generateInterfaceBuilder'
import { indent } from './indent'
import { join } from './join'
import { joinArrayWith } from './joinArrayWith'
import { joinWith } from './joinWith'
import { lineBreakBefore } from './lineBreakBefore'
import { makeComment } from './makeComment'

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
