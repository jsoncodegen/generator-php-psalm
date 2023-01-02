import {
	IGenerator,
	IGeneratorResult,
	TGeneratorResult,
} from 'jsoncodegen-types-for-generator'
import { generateEnum } from './fun/generateEnum'
import { generateExtras } from './fun/generateExtras'
import { generateInterface } from './fun/generateInterface'
import { IConfig } from './model/IConfig'

const generator: IGenerator = {
	async generate(config: IConfig, namedTypesById): Promise<TGeneratorResult> {
		let result: IGeneratorResult[] = []
		for (const namedType of namedTypesById.values()) {
			switch (namedType.kind) {
				case 'Interface':
					result = [
						...result,
						...(await generateInterface(config, namedTypesById, namedType)),
					]
					break
				case 'NumberEnum':
				case 'StringEnum':
					result = [...result, ...(await generateEnum(config, namedType))]
					break
			}
		}
		result = [...result, ...(await generateExtras(config))]
		return result
	},
}

module.exports = generator
