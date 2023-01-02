import { IConfig } from '../model/IConfig'
import { joinWith } from './joinWith'
import { namedFieldTypeLocalName } from './namedFieldTypeLocalName'

export function namedFieldTypeLocalNameWithEnumValue(
	config: IConfig,
	t: { absoluteDirectoryPath: string[]; name: string; valueName: string },
) {
	return joinWith('::')(namedFieldTypeLocalName(config, t), t.valueName)
}
