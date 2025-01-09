<?php

namespace JCG\Test;

use JCG\Test\generated\Assert\parent\tests\AssertJsonStringEnumValueLocalTest;
use JCG\Test\generated\Builder\parent\tests\JsonStringEnumValueLocalTestBuilder;
use JCG\Test\generated\Type\parent\tests\JsonStringEnum;
use JCG\Test\generated\Type\parent\tests\JsonStringEnumValueLocalTest;
use JCG\Test\generated\Util\JsonMap;

class Main
{
	/**
	 * @return void
	 * @throws \Exception
	 */
	public static function main()
	{
		$it = new JsonStringEnumValueLocalTest(
			(new JsonStringEnumValueLocalTestBuilder())
				->setEnumValue(JsonStringEnum::Name)
				->setEnumValueWithDescription(JsonStringEnum::Name)
				//->setEnumValueOrNull(null)
				->setArrayOfEnumValues([JsonStringEnum::Name])
				->setArrayOfArraysOfEnumValues([[JsonStringEnum::Name]])
				->setArrayOfEnumValuesAndNulls([JsonStringEnum::Name, null])
				->setArrayOfEnumValuesOrNull(null)
				->setArrayOfEnumValuesAndNullsOrNull(null)
				->setMapOfEnumValues(new JsonMap(["hey" => JsonStringEnum::Name]))
				->setMapOfMapsOfEnumValues(new JsonMap(["hey" => new JsonMap(["ho" => JsonStringEnum::Name])]))
				->setMapOfNullsAndEnumValues(new JsonMap(["hey" => null, "ho" => JsonStringEnum::Name]))
				->setMapOfEnumValuesOrNull(null)
				->setMapOfNullsAndEnumValuesOrNull(null)
				->setArrayOfMapsOfEnumValues([new JsonMap(["hey" => JsonStringEnum::Name])])
				->setArrayOfMapsOfEnumValuesOrNull(null)
				->setArrayOfNullsAndMapsOfEnumValues([new JsonMap(["hey" => JsonStringEnum::Name]), null])
				->setArrayOfMapsOfNullsAndEnumValues([new JsonMap(["hey" => JsonStringEnum::Name, "ho" => null])])
				->setArrayOfNullsAndMapsOfNullsAndEnumValuesOrNull(null)
				->setMapOfArraysOfEnumValues(new JsonMap(["hey" => [JsonStringEnum::Name]]))
				->setMapOfArraysOfEnumValuesOrNull(null)
				->setMapOfNullsAndArraysOfEnumValues(new JsonMap(["hey" => [JsonStringEnum::Name], "ho" => null]))
				->setMapOfArraysOfNullsAndEnumValues(new JsonMap(["hey" => [JsonStringEnum::Name, null]]))
				->setMapOfNullsAndArraysOfNullsAndEnumValuesOrNull(null)
		);
		try {
			$json = Json::stringify($it);
			echo "JSON: $json\n";
			$itCloned = new JsonStringEnumValueLocalTest(
				JsonStringEnumValueLocalTestBuilder::from($it)
			);
			$jsonCloned = Json::stringify($itCloned);
			echo "JSON cloned: $jsonCloned\n";
			if ($jsonCloned !== $json) {
				throw new \Exception("[sptftj] Invalid clone.");
			}
			echo "JSON cloned successfully.\n";
		} catch (\Exception $e) {
			echo "$e\n";
		}
		try {
			/** @var mixed $it2 */
			$it2 = Json::parse(<<<EOS
{
	"enumValue": "Value",
	"enumValueWithDescription": "Value",
	"enumValueOrNull": null,
	"arrayOfEnumValues": ["Value"],
	"arrayOfArraysOfEnumValues": [["Value"]],
	"arrayOfEnumValuesAndNulls": ["Value", null],
	"arrayOfEnumValuesOrNull": null,
	"arrayOfEnumValuesAndNullsOrNull": null,
	"mapOfEnumValues": { "hey": "Value" },
	"mapOfMapsOfEnumValues": { "hey": { "ho": "Value" } },
	"mapOfNullsAndEnumValues": { "hey": null, "ho": "Value" },
	"mapOfEnumValuesOrNull": null,
	"mapOfNullsAndEnumValuesOrNull": null,
	"arrayOfMapsOfEnumValues": [{ "hey": "Value" }],
	"arrayOfMapsOfEnumValuesOrNull": null,
	"arrayOfNullsAndMapsOfEnumValues": [{ "hey": "Value" }, null],
	"arrayOfMapsOfNullsAndEnumValues": [{ "hey": "Value", "ho": null }],
	"arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull": null,
	"mapOfArraysOfEnumValues": { "hey": ["Value"] },
	"mapOfArraysOfEnumValuesOrNull": null,
	"mapOfNullsAndArraysOfEnumValues": { "hey": ["Value"], "ho": null },
	"mapOfArraysOfNullsAndEnumValues": { "hey": ["Value", null] },
	"mapOfNullsAndArraysOfNullsAndEnumValuesOrNull": null
}
EOS
			);
			$it2 = AssertJsonStringEnumValueLocalTest::assert($it2);
			echo "JSON read successfully.\n";
		} catch (\Exception $e) {
			echo "$e\n";
		}
		try {
			/** @var JsonMap<string> $map */
			$map = new JsonMap(['hey' => 'ho']);
			$mapArray = $map->toArray();
			$mapArray['foo'] = 'bar';
			if (isset($map['foo'])) {
				throw new \Exception("[spthew] JsonMap mutated.");
			}
			$mapCloned = new JsonMap($mapArray);
			if ($mapCloned['hey'] !== 'ho') {
				throw new \Exception("[sptj5o] Missing value from JsonMap.");
			}
			if ($mapCloned['foo'] !== 'bar') {
				throw new \Exception("[sptj63] Invalid JsonMap data.");
			}
			echo "JsonMap cloned successfully.\n";
		} catch (\Exception $e) {
			echo "$e\n";
		}
		echo "Done.\n";
	}
}