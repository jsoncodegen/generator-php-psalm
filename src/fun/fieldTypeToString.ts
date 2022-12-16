import { TFieldType } from 'jsoncodegen-types-for-generator'
import { UTILITY_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { join } from './join'
import { joinWith } from './joinWith'
import { namedFieldTypeLocalName } from './namedFieldTypeLocalName'
import { namedFieldTypeLocalNameWithEnumValue } from './namedFieldTypeLocalNameWithEnumValue'

export function fieldTypeToString(config: IConfig, fieldType: TFieldType) {
	let result = ''
	switch (fieldType.kind) {
		case 'Array':
			result = join(
				`list<`,
				fieldTypeToString(config, fieldType.fieldType),
				`>`,
			)
			break
		case 'Map':
			result = join(
				'\\',
				joinWith('\\')(config.packagePath, UTILITY_FOLDER_NAME, 'JsonMap'),
				`<`,
				fieldTypeToString(config, fieldType.fieldType),
				`>`,
			)
			break
		case 'InterfaceReference':
		case 'NumberEnumReference':
		case 'StringEnumReference':
			result = namedFieldTypeLocalName(config, fieldType)
			break
		case 'StringEnumValueReference':
		case 'NumberEnumValueReference':
			result = namedFieldTypeLocalNameWithEnumValue(config, fieldType)
			break
		case 'PrimitiveValue':
			switch (fieldType.name) {
				case 'boolean':
					result = 'bool'
					break
				case 'number':
					result = 'int|float'
					break
				default:
					result = fieldType.name
			}
			break
		default:
			throw new Error(`[q2cx8v]`)
	}
	if (fieldType.isNullable) {
		result = `${result}|null`
	}
	return result
}
