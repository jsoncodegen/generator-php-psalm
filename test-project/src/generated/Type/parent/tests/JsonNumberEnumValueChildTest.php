<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests number enum value fields.
 */
final class JsonNumberEnumValueChildTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name
	 */
	public $enumValue;

	/**
	 * This is an enum value.
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name
	 */
	public $enumValueWithDescription;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null
	 */
	public $enumValueOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>
	 */
	public $arrayOfEnumValues;

	/**
	 * @readonly
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>>
	 */
	public $arrayOfArraysOfEnumValues;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>
	 */
	public $arrayOfEnumValuesAndNulls;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>|null
	 */
	public $arrayOfEnumValuesOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>|null
	 */
	public $arrayOfEnumValuesAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>
	 */
	public $mapOfEnumValues;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>>
	 */
	public $mapOfMapsOfEnumValues;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>
	 */
	public $mapOfNullsAndEnumValues;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>|null
	 */
	public $mapOfEnumValuesOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>|null
	 */
	public $mapOfNullsAndEnumValuesOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>>
	 */
	public $arrayOfMapsOfEnumValues;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>>|null
	 */
	public $arrayOfMapsOfEnumValuesOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>|null>
	 */
	public $arrayOfNullsAndMapsOfEnumValues;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>>
	 */
	public $arrayOfMapsOfNullsAndEnumValues;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>>
	 */
	public $mapOfArraysOfEnumValues;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>>|null
	 */
	public $mapOfArraysOfEnumValuesOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name>|null>
	 */
	public $mapOfNullsAndArraysOfEnumValues;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>>
	 */
	public $mapOfArraysOfNullsAndEnumValues;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndEnumValuesOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonNumberEnumValueChildTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_enumValue = $builder->getEnumValue();
		$builder_enumValueWithDescription = $builder->getEnumValueWithDescription();
		$builder_enumValueOrNull = $builder->getEnumValueOrNull();
		$builder_arrayOfEnumValues = $builder->getArrayOfEnumValues();
		$builder_arrayOfArraysOfEnumValues = $builder->getArrayOfArraysOfEnumValues();
		$builder_arrayOfEnumValuesAndNulls = $builder->getArrayOfEnumValuesAndNulls();
		$builder_arrayOfEnumValuesOrNull = $builder->getArrayOfEnumValuesOrNull();
		$builder_arrayOfEnumValuesAndNullsOrNull = $builder->getArrayOfEnumValuesAndNullsOrNull();
		$builder_mapOfEnumValues = $builder->getMapOfEnumValues();
		$builder_mapOfMapsOfEnumValues = $builder->getMapOfMapsOfEnumValues();
		$builder_mapOfNullsAndEnumValues = $builder->getMapOfNullsAndEnumValues();
		$builder_mapOfEnumValuesOrNull = $builder->getMapOfEnumValuesOrNull();
		$builder_mapOfNullsAndEnumValuesOrNull = $builder->getMapOfNullsAndEnumValuesOrNull();
		$builder_arrayOfMapsOfEnumValues = $builder->getArrayOfMapsOfEnumValues();
		$builder_arrayOfMapsOfEnumValuesOrNull = $builder->getArrayOfMapsOfEnumValuesOrNull();
		$builder_arrayOfNullsAndMapsOfEnumValues = $builder->getArrayOfNullsAndMapsOfEnumValues();
		$builder_arrayOfMapsOfNullsAndEnumValues = $builder->getArrayOfMapsOfNullsAndEnumValues();
		$builder_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull = $builder->getArrayOfNullsAndMapsOfNullsAndEnumValuesOrNull();
		$builder_mapOfArraysOfEnumValues = $builder->getMapOfArraysOfEnumValues();
		$builder_mapOfArraysOfEnumValuesOrNull = $builder->getMapOfArraysOfEnumValuesOrNull();
		$builder_mapOfNullsAndArraysOfEnumValues = $builder->getMapOfNullsAndArraysOfEnumValues();
		$builder_mapOfArraysOfNullsAndEnumValues = $builder->getMapOfArraysOfNullsAndEnumValues();
		$builder_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull = $builder->getMapOfNullsAndArraysOfNullsAndEnumValuesOrNull();
		
		if (is_null($builder_enumValue)) throw new \Exception('JsonNumberEnumValueChildTest: enumValue must not be null.');
		if (is_null($builder_enumValueWithDescription)) throw new \Exception('JsonNumberEnumValueChildTest: enumValueWithDescription must not be null.');
		if (is_null($builder_arrayOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: arrayOfEnumValues must not be null.');
		if (is_null($builder_arrayOfArraysOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: arrayOfArraysOfEnumValues must not be null.');
		if (is_null($builder_arrayOfEnumValuesAndNulls)) throw new \Exception('JsonNumberEnumValueChildTest: arrayOfEnumValuesAndNulls must not be null.');
		if (is_null($builder_mapOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: mapOfEnumValues must not be null.');
		if (is_null($builder_mapOfMapsOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: mapOfMapsOfEnumValues must not be null.');
		if (is_null($builder_mapOfNullsAndEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: mapOfNullsAndEnumValues must not be null.');
		if (is_null($builder_arrayOfMapsOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: arrayOfMapsOfEnumValues must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: arrayOfNullsAndMapsOfEnumValues must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: arrayOfMapsOfNullsAndEnumValues must not be null.');
		if (is_null($builder_mapOfArraysOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: mapOfArraysOfEnumValues must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: mapOfNullsAndArraysOfEnumValues must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndEnumValues)) throw new \Exception('JsonNumberEnumValueChildTest: mapOfArraysOfNullsAndEnumValues must not be null.');
		
		$this->enumValue = $builder_enumValue;
		$this->enumValueWithDescription = $builder_enumValueWithDescription;
		$this->enumValueOrNull = $builder_enumValueOrNull;
		$this->arrayOfEnumValues = $builder_arrayOfEnumValues;
		$this->arrayOfArraysOfEnumValues = $builder_arrayOfArraysOfEnumValues;
		$this->arrayOfEnumValuesAndNulls = $builder_arrayOfEnumValuesAndNulls;
		$this->arrayOfEnumValuesOrNull = $builder_arrayOfEnumValuesOrNull;
		$this->arrayOfEnumValuesAndNullsOrNull = $builder_arrayOfEnumValuesAndNullsOrNull;
		$this->mapOfEnumValues = $builder_mapOfEnumValues;
		$this->mapOfMapsOfEnumValues = $builder_mapOfMapsOfEnumValues;
		$this->mapOfNullsAndEnumValues = $builder_mapOfNullsAndEnumValues;
		$this->mapOfEnumValuesOrNull = $builder_mapOfEnumValuesOrNull;
		$this->mapOfNullsAndEnumValuesOrNull = $builder_mapOfNullsAndEnumValuesOrNull;
		$this->arrayOfMapsOfEnumValues = $builder_arrayOfMapsOfEnumValues;
		$this->arrayOfMapsOfEnumValuesOrNull = $builder_arrayOfMapsOfEnumValuesOrNull;
		$this->arrayOfNullsAndMapsOfEnumValues = $builder_arrayOfNullsAndMapsOfEnumValues;
		$this->arrayOfMapsOfNullsAndEnumValues = $builder_arrayOfMapsOfNullsAndEnumValues;
		$this->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull = $builder_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull;
		$this->mapOfArraysOfEnumValues = $builder_mapOfArraysOfEnumValues;
		$this->mapOfArraysOfEnumValuesOrNull = $builder_mapOfArraysOfEnumValuesOrNull;
		$this->mapOfNullsAndArraysOfEnumValues = $builder_mapOfNullsAndArraysOfEnumValues;
		$this->mapOfArraysOfNullsAndEnumValues = $builder_mapOfArraysOfNullsAndEnumValues;
		$this->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull = $builder_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull;
	}
}