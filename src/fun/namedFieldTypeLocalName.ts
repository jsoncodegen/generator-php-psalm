import {
	IInterfaceReference,
	INumberEnumReference,
	INumberEnumValueReference,
	IStringEnumReference,
	IStringEnumValueReference,
} from 'jsoncodegen-types-for-generator'
import { TYPE_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { join } from './join'
import { joinWith } from './joinWith'

export function namedFieldTypeLocalName(
	config: IConfig,
	t:
		| IStringEnumReference
		| IStringEnumValueReference
		| INumberEnumReference
		| INumberEnumValueReference
		| IInterfaceReference,
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
