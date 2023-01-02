import { TYPE_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { join } from './join'
import { joinWith } from './joinWith'

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
