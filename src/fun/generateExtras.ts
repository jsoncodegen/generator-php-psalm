import { IGeneratorResult } from 'jsoncodegen-types-for-generator'
import { UTILITY_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { templateOfAssertUtil } from '../template/templateOfAssertUtil'
import { templateOfJsonMap } from '../template/templateOfJsonMap'
import { joinWith } from './joinWith'

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
