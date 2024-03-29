import {
	IGeneratorResult,
	IInterface,
	IInterfaceField,
	TFieldType,
} from 'jsoncodegen-types-for-generator'
import { IConfig } from '../model/IConfig.js'
import {
	ASSERT_FOLDER_NAME,
	TYPE_FOLDER_NAME,
	UTILITY_FOLDER_NAME,
} from '../model/constants.js'
import { templateOfAssertInterface } from '../template/templateOfAssertInterface.js'
import { capitalize } from './capitalize.js'
import { indent } from './indent.js'
import { join } from './join.js'
import { joinArrayWith } from './joinArrayWith.js'
import { joinWith } from './joinWith.js'
import { makeComment } from './makeComment.js'

export async function generateInterfaceAssert(
	config: IConfig,
	{ directoryPath, description, fields, name }: IInterface,
): Promise<IGeneratorResult> {
	const assertUtilClassPath = join(
		'\\',
		joinWith('\\')(config.namespaceBase, UTILITY_FOLDER_NAME, 'AssertUtil'),
	)
	const namespace = joinWith('\\')(
		config.namespaceBase,
		ASSERT_FOLDER_NAME,
		...directoryPath,
	)
	const interfaceAlias = join(
		'\\',
		joinWith('\\')(
			config.namespaceBase,
			TYPE_FOLDER_NAME,
			...directoryPath,
			name,
		),
	)
	const extraFieldsCheck = join(
		assertUtilClassPath,
		'::assertFieldsIn(',
		joinWith(', ')(
			'$o',
			JSON.stringify(fields.map((field) => field.name)),
			'$path',
		),
		');',
	)
	const assertions = fields.map((field) => wrap(field.fieldType, field))
	const comment = indent(
		makeComment(
			joinWith('\n')(
				'@param mixed $o',
				'@param ?bool $isNullable',
				'@param ?string $path',
				joinWith(' ')('@return', join(interfaceAlias, '|null')),
				'@throws \\Exception',
			),
		),
	)
	return {
		filePath: [ASSERT_FOLDER_NAME, ...directoryPath, `Assert${name}.php`],
		content: templateOfAssertInterface({
			interfaceName: name,
			interfaceAlias,
			extraFieldsCheck,
			assertions: joinArrayWith(`\n`)(assertions),
			comment,
			namespace,
		}),
	}

	function wrap(fieldType: TFieldType, field: IInterfaceField): string {
		const fieldAccess =
			field.fieldType === fieldType
				? `(isset($o->${field.name}) ? $o->${field.name} : null)`
				: `$value`
		const resultHandling =
			field.fieldType === fieldType ? `$o->${field.name} = ` : `return `
		let assertFunName = ''
		switch (fieldType.kind) {
			case 'PrimitiveValue':
				assertFunName =
					assertUtilClassPath + `::assert${capitalize(fieldType.name)}`
				break
			case 'InterfaceReference':
			case 'NumberEnumReference':
			case 'StringEnumReference':
				assertFunName = join(
					'\\',
					joinWith('\\')(
						config.namespaceBase,
						ASSERT_FOLDER_NAME,
						...fieldType.absoluteDirectoryPath,
						'Assert' + fieldType.name,
					),
					`::assert`,
				)
				break
			case 'StringEnumValueReference':
			case 'NumberEnumValueReference':
				assertFunName = assertUtilClassPath + `::assertExactValue`
				break
			case 'Array':
				assertFunName = assertUtilClassPath + `::assertArray`
				break
			case 'Map':
				assertFunName = assertUtilClassPath + `::assertMap`
				break
		}
		let fieldTypeName = ''
		switch (fieldType.kind) {
			case 'StringEnumReference':
			case 'NumberEnumReference':
			case 'StringEnumValueReference':
			case 'NumberEnumValueReference':
				fieldTypeName = join(
					'\\',
					joinArrayWith('\\')([
						config.namespaceBase,
						TYPE_FOLDER_NAME,
						...fieldType.absoluteDirectoryPath,
						fieldType.name,
					]),
				)
				break
		}
		let fieldTypeValueName = ''
		switch (fieldType.kind) {
			case 'StringEnumValueReference':
			case 'NumberEnumValueReference':
				fieldTypeValueName = fieldType.valueName
				break
		}
		let validation = ''
		switch (fieldType.kind) {
			case 'Array':
			case 'Map':
				validation = joinWith('\n')(
					makeComment(
						joinWith(`\n`)(
							`@param mixed $value`,
							`@param ?string $path`,
							`@return mixed`,
							`@throws \\Exception`,
						),
					),
					`function ($value, $path) {`,
					indent(wrap(fieldType.fieldType, field)),
					`}`,
				)
				break
			case 'StringEnumValueReference':
			case 'NumberEnumValueReference':
				validation = joinWith('::')(fieldTypeName, fieldTypeValueName)
				break
		}
		return join(
			resultHandling + assertFunName,
			`(\n`,
			indent(
				joinWith(`,\n`)(
					validation,
					fieldAccess,
					fieldType.isNullable + '',
					field.fieldType === fieldType
						? `$path . '->${joinWith(`:`)(
								field.name,
								fieldTypeName.replace(/\\/g, '\\\\'),
								fieldTypeValueName,
						  )}'`
						: `$path`,
				),
			),
			`\n);`,
		)
	}
}
