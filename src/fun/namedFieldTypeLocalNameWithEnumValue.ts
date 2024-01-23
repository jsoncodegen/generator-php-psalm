import { IConfig } from '../model/IConfig.js'
import { joinWith } from './joinWith.js'
import { namedFieldTypeLocalName } from './namedFieldTypeLocalName.js'

export function namedFieldTypeLocalNameWithEnumValue(
	config: IConfig,
	t: { absoluteDirectoryPath: string[]; name: string; valueName: string },
) {
	return joinWith('::')(namedFieldTypeLocalName(config, t), t.valueName)
}
