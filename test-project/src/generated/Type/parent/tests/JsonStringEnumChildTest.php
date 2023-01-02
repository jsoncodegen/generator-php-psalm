<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests string enum fields.
 */
final class JsonStringEnumChildTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue
	 */
	public $enum_;

	/**
	 * This is an enum.
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue
	 */
	public $enumWithDescription;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null
	 */
	public $enumOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>
	 */
	public $arrayOfEnums;

	/**
	 * @readonly
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>>
	 */
	public $arrayOfArraysOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>
	 */
	public $arrayOfEnumsAndNulls;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>|null
	 */
	public $arrayOfEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	public $arrayOfEnumsAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>
	 */
	public $mapOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>>
	 */
	public $mapOfMapsOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>
	 */
	public $mapOfNullsAndEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>|null
	 */
	public $mapOfEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	public $mapOfNullsAndEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>>
	 */
	public $arrayOfMapsOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public $arrayOfMapsOfEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>|null>
	 */
	public $arrayOfNullsAndMapsOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>>
	 */
	public $arrayOfMapsOfNullsAndEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>>
	 */
	public $mapOfArraysOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public $mapOfArraysOfEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue>|null>
	 */
	public $mapOfNullsAndArraysOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>>
	 */
	public $mapOfArraysOfNullsAndEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::NameOfEmptyValue|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndEnumsOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonStringEnumChildTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_enum_ = $builder->getEnum_();
		$builder_enumWithDescription = $builder->getEnumWithDescription();
		$builder_enumOrNull = $builder->getEnumOrNull();
		$builder_arrayOfEnums = $builder->getArrayOfEnums();
		$builder_arrayOfArraysOfEnums = $builder->getArrayOfArraysOfEnums();
		$builder_arrayOfEnumsAndNulls = $builder->getArrayOfEnumsAndNulls();
		$builder_arrayOfEnumsOrNull = $builder->getArrayOfEnumsOrNull();
		$builder_arrayOfEnumsAndNullsOrNull = $builder->getArrayOfEnumsAndNullsOrNull();
		$builder_mapOfEnums = $builder->getMapOfEnums();
		$builder_mapOfMapsOfEnums = $builder->getMapOfMapsOfEnums();
		$builder_mapOfNullsAndEnums = $builder->getMapOfNullsAndEnums();
		$builder_mapOfEnumsOrNull = $builder->getMapOfEnumsOrNull();
		$builder_mapOfNullsAndEnumsOrNull = $builder->getMapOfNullsAndEnumsOrNull();
		$builder_arrayOfMapsOfEnums = $builder->getArrayOfMapsOfEnums();
		$builder_arrayOfMapsOfEnumsOrNull = $builder->getArrayOfMapsOfEnumsOrNull();
		$builder_arrayOfNullsAndMapsOfEnums = $builder->getArrayOfNullsAndMapsOfEnums();
		$builder_arrayOfMapsOfNullsAndEnums = $builder->getArrayOfMapsOfNullsAndEnums();
		$builder_arrayOfNullsAndMapsOfNullsAndEnumsOrNull = $builder->getArrayOfNullsAndMapsOfNullsAndEnumsOrNull();
		$builder_mapOfArraysOfEnums = $builder->getMapOfArraysOfEnums();
		$builder_mapOfArraysOfEnumsOrNull = $builder->getMapOfArraysOfEnumsOrNull();
		$builder_mapOfNullsAndArraysOfEnums = $builder->getMapOfNullsAndArraysOfEnums();
		$builder_mapOfArraysOfNullsAndEnums = $builder->getMapOfArraysOfNullsAndEnums();
		$builder_mapOfNullsAndArraysOfNullsAndEnumsOrNull = $builder->getMapOfNullsAndArraysOfNullsAndEnumsOrNull();
		
		if (is_null($builder_enum_)) throw new \Exception('JsonStringEnumChildTest: enum_ must not be null.');
		if (is_null($builder_enumWithDescription)) throw new \Exception('JsonStringEnumChildTest: enumWithDescription must not be null.');
		if (is_null($builder_arrayOfEnums)) throw new \Exception('JsonStringEnumChildTest: arrayOfEnums must not be null.');
		if (is_null($builder_arrayOfArraysOfEnums)) throw new \Exception('JsonStringEnumChildTest: arrayOfArraysOfEnums must not be null.');
		if (is_null($builder_arrayOfEnumsAndNulls)) throw new \Exception('JsonStringEnumChildTest: arrayOfEnumsAndNulls must not be null.');
		if (is_null($builder_mapOfEnums)) throw new \Exception('JsonStringEnumChildTest: mapOfEnums must not be null.');
		if (is_null($builder_mapOfMapsOfEnums)) throw new \Exception('JsonStringEnumChildTest: mapOfMapsOfEnums must not be null.');
		if (is_null($builder_mapOfNullsAndEnums)) throw new \Exception('JsonStringEnumChildTest: mapOfNullsAndEnums must not be null.');
		if (is_null($builder_arrayOfMapsOfEnums)) throw new \Exception('JsonStringEnumChildTest: arrayOfMapsOfEnums must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfEnums)) throw new \Exception('JsonStringEnumChildTest: arrayOfNullsAndMapsOfEnums must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndEnums)) throw new \Exception('JsonStringEnumChildTest: arrayOfMapsOfNullsAndEnums must not be null.');
		if (is_null($builder_mapOfArraysOfEnums)) throw new \Exception('JsonStringEnumChildTest: mapOfArraysOfEnums must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfEnums)) throw new \Exception('JsonStringEnumChildTest: mapOfNullsAndArraysOfEnums must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndEnums)) throw new \Exception('JsonStringEnumChildTest: mapOfArraysOfNullsAndEnums must not be null.');
		
		$this->enum_ = $builder_enum_;
		$this->enumWithDescription = $builder_enumWithDescription;
		$this->enumOrNull = $builder_enumOrNull;
		$this->arrayOfEnums = $builder_arrayOfEnums;
		$this->arrayOfArraysOfEnums = $builder_arrayOfArraysOfEnums;
		$this->arrayOfEnumsAndNulls = $builder_arrayOfEnumsAndNulls;
		$this->arrayOfEnumsOrNull = $builder_arrayOfEnumsOrNull;
		$this->arrayOfEnumsAndNullsOrNull = $builder_arrayOfEnumsAndNullsOrNull;
		$this->mapOfEnums = $builder_mapOfEnums;
		$this->mapOfMapsOfEnums = $builder_mapOfMapsOfEnums;
		$this->mapOfNullsAndEnums = $builder_mapOfNullsAndEnums;
		$this->mapOfEnumsOrNull = $builder_mapOfEnumsOrNull;
		$this->mapOfNullsAndEnumsOrNull = $builder_mapOfNullsAndEnumsOrNull;
		$this->arrayOfMapsOfEnums = $builder_arrayOfMapsOfEnums;
		$this->arrayOfMapsOfEnumsOrNull = $builder_arrayOfMapsOfEnumsOrNull;
		$this->arrayOfNullsAndMapsOfEnums = $builder_arrayOfNullsAndMapsOfEnums;
		$this->arrayOfMapsOfNullsAndEnums = $builder_arrayOfMapsOfNullsAndEnums;
		$this->arrayOfNullsAndMapsOfNullsAndEnumsOrNull = $builder_arrayOfNullsAndMapsOfNullsAndEnumsOrNull;
		$this->mapOfArraysOfEnums = $builder_mapOfArraysOfEnums;
		$this->mapOfArraysOfEnumsOrNull = $builder_mapOfArraysOfEnumsOrNull;
		$this->mapOfNullsAndArraysOfEnums = $builder_mapOfNullsAndArraysOfEnums;
		$this->mapOfArraysOfNullsAndEnums = $builder_mapOfArraysOfNullsAndEnums;
		$this->mapOfNullsAndArraysOfNullsAndEnumsOrNull = $builder_mapOfNullsAndArraysOfNullsAndEnumsOrNull;
	}
}