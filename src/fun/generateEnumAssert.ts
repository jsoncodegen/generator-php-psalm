import {
	IGeneratorResult,
	INumberEnum,
	INumberEnumValue,
	IStringEnum,
} from 'jsoncodegen-types-for-generator'
import {
	ASSERT_FOLDER_NAME,
	TYPE_FOLDER_NAME,
	UTILITY_FOLDER_NAME,
} from '../model/constants'
import { IConfig } from '../model/IConfig'
import { templateOfAssertEnum } from '../template/templateOfAssertEnum'
import { indent } from './indent'
import { join } from './join'
import { joinArrayWith } from './joinArrayWith'
import { joinWith } from './joinWith'
import { makeComment } from './makeComment'

export async function generateEnumAssert(
	config: IConfig,
	{ directoryPath, values, name, kind }: IStringEnum | INumberEnum,
): Promise<IGeneratorResult> {
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
	const comment = indent(
		makeComment(
			joinWith('\n')(
				'@param mixed $o',
				'@param ?bool $isNullable',
				'@param ?string $path',
				joinWith(' ')('@return', join(enumAlias, '|null')),
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
			assertFunAlias,
			values: valuesString,
		}),
	}
}
