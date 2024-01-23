import { IGeneratorResult } from 'jsoncodegen-types-for-generator'
import { IConfig } from '../model/IConfig.js'
import { UTILITY_FOLDER_NAME } from '../model/constants.js'
import { templateOfAssertUtil } from '../template/templateOfAssertUtil.js'
import { templateOfJsonMap } from '../template/templateOfJsonMap.js'
import { joinWith } from './joinWith.js'

export async function generateExtras(
	config: IConfig,
): Promise<IGeneratorResult[]> {
	return [
		{
			filePath: [UTILITY_FOLDER_NAME, 'AssertUtil.php'],
			content: templateOfAssertUtil({
				namespace: joinWith('\\')(config.namespaceBase, UTILITY_FOLDER_NAME),
			}),
		},
		{
			filePath: [UTILITY_FOLDER_NAME, 'JsonMap.php'],
			content: templateOfJsonMap({
				namespace: joinWith('\\')(config.namespaceBase, UTILITY_FOLDER_NAME),
			}),
		},
	]
}
