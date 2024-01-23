import {
	IGeneratorResult,
	INumberEnum,
	INumberEnumValue,
	IStringEnum,
	IStringEnumValue,
} from 'jsoncodegen-types-for-generator'
import { IConfig } from '../model/IConfig.js'
import {
	ASSERT_FOLDER_NAME,
	TYPE_FOLDER_NAME,
	UTILITY_FOLDER_NAME,
} from '../model/constants.js'
import { templateOfAssertEnum } from '../template/templateOfAssertEnum.js'
import { indent } from './indent.js'
import { join } from './join.js'
import { joinArrayWith } from './joinArrayWith.js'
import { joinWith } from './joinWith.js'
import { makeComment } from './makeComment.js'

export async function generateEnumAssert(
	config: IConfig,
	enumType: IStringEnum | INumberEnum,
): Promise<IGeneratorResult> {
	const { directoryPath, values, name, kind } = enumType
	const assertFunName =
		kind === 'StringEnum' ? `assertStringEnumValue` : `assertNumberEnumValue`
	const assertFunAlias = join(
		'\\',
		joinWith(`\\`)(
			config.namespaceBase,
			UTILITY_FOLDER_NAME,
			join('AssertUtil::', assertFunName),
		),
	)
	const namespace = joinWith(`\\`)(
		config.namespaceBase,
		ASSERT_FOLDER_NAME,
		...directoryPath,
	)
	const enumAlias = join(
		'\\',
		joinWith(`\\`)(
			config.namespaceBase,
			TYPE_FOLDER_NAME,
			...directoryPath,
			name,
		),
	)
	const valuesString = joinWith('\n')(
		'[',
		indent(
			joinWith('\n')(
				indent(
					joinArrayWith(`,\n`)(
						(values as INumberEnumValue[]).map((value) =>
							joinWith(`::`)(enumAlias, value.name),
						),
					),
				),
				'];',
			),
		),
	)
	const enumTypeDecl = joinArrayWith('|')(
		(enumType.values as (IStringEnumValue | INumberEnumValue)[]).map(
			(value) => enumAlias + '::' + value.name,
		),
	)
	const comment = indent(
		makeComment(
			joinWith('\n')(
				'@param mixed $o',
				'@param ?bool $isNullable',
				'@param ?string $path',
				joinWith(' ')('@return', join(enumTypeDecl, '|null')),
				'@throws \\Exception',
			),
		),
	)
	return {
		filePath: [ASSERT_FOLDER_NAME, ...directoryPath, `Assert${name}.php`],
		content: templateOfAssertEnum({
			namespace,
			comment,
			enumName: name,
			enumAlias: enumAlias,
			enumType: enumTypeDecl,
			assertFunAlias,
			values: valuesString,
		}),
	}
}
