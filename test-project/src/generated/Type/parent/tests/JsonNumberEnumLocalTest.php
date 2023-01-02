<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests number enum fields.
 */
final class JsonNumberEnumLocalTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue
	 */
	public $enum_;

	/**
	 * This is an enum.
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue
	 */
	public $enumWithDescription;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	public $enumOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>
	 */
	public $arrayOfEnums;

	/**
	 * @readonly
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>
	 */
	public $arrayOfArraysOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>
	 */
	public $arrayOfEnumsAndNulls;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	public $arrayOfEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	public $arrayOfEnumsAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>
	 */
	public $mapOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>
	 */
	public $mapOfMapsOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>
	 */
	public $mapOfNullsAndEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	public $mapOfEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	public $mapOfNullsAndEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>
	 */
	public $arrayOfMapsOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public $arrayOfMapsOfEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null>
	 */
	public $arrayOfNullsAndMapsOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>>
	 */
	public $arrayOfMapsOfNullsAndEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>
	 */
	public $mapOfArraysOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public $mapOfArraysOfEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null>
	 */
	public $mapOfNullsAndArraysOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>>
	 */
	public $mapOfArraysOfNullsAndEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndEnumsOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonNumberEnumLocalTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
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
		
		if (is_null($builder_enum_)) throw new \Exception('JsonNumberEnumLocalTest: enum_ must not be null.');
		if (is_null($builder_enumWithDescription)) throw new \Exception('JsonNumberEnumLocalTest: enumWithDescription must not be null.');
		if (is_null($builder_arrayOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: arrayOfEnums must not be null.');
		if (is_null($builder_arrayOfArraysOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: arrayOfArraysOfEnums must not be null.');
		if (is_null($builder_arrayOfEnumsAndNulls)) throw new \Exception('JsonNumberEnumLocalTest: arrayOfEnumsAndNulls must not be null.');
		if (is_null($builder_mapOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: mapOfEnums must not be null.');
		if (is_null($builder_mapOfMapsOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: mapOfMapsOfEnums must not be null.');
		if (is_null($builder_mapOfNullsAndEnums)) throw new \Exception('JsonNumberEnumLocalTest: mapOfNullsAndEnums must not be null.');
		if (is_null($builder_arrayOfMapsOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: arrayOfMapsOfEnums must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: arrayOfNullsAndMapsOfEnums must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndEnums)) throw new \Exception('JsonNumberEnumLocalTest: arrayOfMapsOfNullsAndEnums must not be null.');
		if (is_null($builder_mapOfArraysOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: mapOfArraysOfEnums must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfEnums)) throw new \Exception('JsonNumberEnumLocalTest: mapOfNullsAndArraysOfEnums must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndEnums)) throw new \Exception('JsonNumberEnumLocalTest: mapOfArraysOfNullsAndEnums must not be null.');
		
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