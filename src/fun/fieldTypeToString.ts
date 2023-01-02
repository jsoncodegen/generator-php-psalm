import {
	INumberEnum,
	INumberEnumValue,
	IStringEnum,
	IStringEnumValue,
	TFieldType,
	TNamedType,
} from 'jsoncodegen-types-for-generator'
import { UTILITY_FOLDER_NAME } from '../model/constants'
import { IConfig } from '../model/IConfig'
import { join } from './join'
import { joinArrayWith } from './joinArrayWith'
import { joinWith } from './joinWith'
import { namedFieldTypeLocalName } from './namedFieldTypeLocalName'
import { namedFieldTypeLocalNameWithEnumValue } from './namedFieldTypeLocalNameWithEnumValue'

export function fieldTypeToString(
	config: IConfig,
	namedTypesById: Map<string, TNamedType>,
	fieldType: TFieldType,
) {
	let result = ''
	switch (fieldType.kind) {
		case 'Array':
			result = join(
				`list<`,
				fieldTypeToString(config, namedTypesById, fieldType.fieldType),
				`>`,
			)
			break
		case 'Map':
			result = join(
				'\\',
				joinWith('\\')(config.namespaceBase, UTILITY_FOLDER_NAME, 'JsonMap'),
				`<`,
				fieldTypeToString(config, namedTypesById, fieldType.fieldType),
				`>`,
			)
			break
		case 'InterfaceReference':
			result = namedFieldTypeLocalName(config, fieldType)
			break
		case 'NumberEnumReference':
		case 'StringEnumReference':
			result = joinArrayWith('|')(
				(
					(namedTypesById.get(fieldType.targetId) as IStringEnum | INumberEnum)
						.values as (IStringEnumValue | INumberEnumValue)[]
				).map((value) =>
					namedFieldTypeLocalNameWithEnumValue(config, {
						absoluteDirectoryPath: fieldType.absoluteDirectoryPath,
						name: fieldType.name,
						valueName: value.name,
					}),
				),
			)
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
