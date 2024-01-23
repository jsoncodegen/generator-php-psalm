import { TYPE_FOLDER_NAME } from '../model/constants.js'
import { IConfig } from '../model/IConfig.js'
import { join } from './join.js'
import { joinWith } from './joinWith.js'

export function namedFieldTypeLocalName(
	config: IConfig,
	t: { absoluteDirectoryPath: string[]; name: string },
) {
	return join(
		'\\',
		joinWith('\\')(
			config.namespaceBase,
			TYPE_FOLDER_NAME,
			...t.absoluteDirectoryPath,
			t.name,
		),
	)
}
