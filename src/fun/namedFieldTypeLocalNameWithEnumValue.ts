import {
	INumberEnumValueReference,
	IStringEnumValueReference,
} from 'jsoncodegen-types-for-generator'
import { IConfig } from '../model/IConfig'
import { joinWith } from './joinWith'
import { namedFieldTypeLocalName } from './namedFieldTypeLocalName'

export function namedFieldTypeLocalNameWithEnumValue(
	config: IConfig,
	t: IStringEnumValueReference | INumberEnumValueReference,
) {
	return joinWith('::')(namedFieldTypeLocalName(config, t), t.valueName)
}
