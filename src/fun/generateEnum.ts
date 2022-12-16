import {
	IGeneratorResult,
	INumberEnum,
	INumberEnumValue,
	IStringEnum,
} from 'jsoncodegen-types-for-generator'
import { TYPE_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { templateOfEnum } from '../template/templateOfEnum'
import { generateEnumAssert } from './generateEnumAssert'
import { indent } from './indent'
import { joinArrayWith } from './joinArrayWith'
import { joinWith } from './joinWith'
import { lineBreakBefore } from './lineBreakBefore'
import { makeComment } from './makeComment'

export async function generateEnum(
	config: IConfig,
	info: IStringEnum | INumberEnum,
): Promise<IGeneratorResult[]> {
	const { directoryPath, name, values, description } = info
	const namespaceDecl = `namespace ${joinWith('\\')(
		config.packagePath,
		TYPE_FOLDER_NAME,
		...directoryPath,
	)};`
	const enumValueDeclarations = joinArrayWith(`\n`)(
		(values as INumberEnumValue[]).map((t) => {
			const comment = lineBreakBefore(indent(makeComment(t.description)))
			const declaration = `\tconst ${t.name} = ${JSON.stringify(t.value)};`
			return joinWith(`\n`)(comment, declaration)
		}),
	)
	const comment = makeComment(description)
	const declaration = templateOfEnum({
		namespaceDecl,
		comment,
		enumName: name,
		enumValueDeclarations,
	})
	return [
		{
			filePath: [TYPE_FOLDER_NAME, ...directoryPath, name + '.php'],
			content: declaration,
		},
		await generateEnumAssert(config, info),
	]
}
