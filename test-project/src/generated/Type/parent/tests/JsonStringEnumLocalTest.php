<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests string enum fields.
 */
final class JsonStringEnumLocalTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum
	 */
	public $enum_;

	/**
	 * This is an enum.
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum
	 */
	public $enumWithDescription;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum|null
	 */
	public $enumOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>
	 */
	public $arrayOfEnums;

	/**
	 * @readonly
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>>
	 */
	public $arrayOfArraysOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>
	 */
	public $arrayOfEnumsAndNulls;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>|null
	 */
	public $arrayOfEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>|null
	 */
	public $arrayOfEnumsAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>
	 */
	public $mapOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>>
	 */
	public $mapOfMapsOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>
	 */
	public $mapOfNullsAndEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>|null
	 */
	public $mapOfEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>|null
	 */
	public $mapOfNullsAndEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>>
	 */
	public $arrayOfMapsOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>>|null
	 */
	public $arrayOfMapsOfEnumsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>|null>
	 */
	public $arrayOfNullsAndMapsOfEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>>
	 */
	public $arrayOfMapsOfNullsAndEnums;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>>
	 */
	public $mapOfArraysOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>>|null
	 */
	public $mapOfArraysOfEnumsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum>|null>
	 */
	public $mapOfNullsAndArraysOfEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>>
	 */
	public $mapOfArraysOfNullsAndEnums;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndEnumsOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonStringEnumLocalTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
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
		
		if (is_null($builder_enum_)) throw new \Exception('JsonStringEnumLocalTest: enum_ must not be null.');
		if (is_null($builder_enumWithDescription)) throw new \Exception('JsonStringEnumLocalTest: enumWithDescription must not be null.');
		if (is_null($builder_arrayOfEnums)) throw new \Exception('JsonStringEnumLocalTest: arrayOfEnums must not be null.');
		if (is_null($builder_arrayOfArraysOfEnums)) throw new \Exception('JsonStringEnumLocalTest: arrayOfArraysOfEnums must not be null.');
		if (is_null($builder_arrayOfEnumsAndNulls)) throw new \Exception('JsonStringEnumLocalTest: arrayOfEnumsAndNulls must not be null.');
		if (is_null($builder_mapOfEnums)) throw new \Exception('JsonStringEnumLocalTest: mapOfEnums must not be null.');
		if (is_null($builder_mapOfMapsOfEnums)) throw new \Exception('JsonStringEnumLocalTest: mapOfMapsOfEnums must not be null.');
		if (is_null($builder_mapOfNullsAndEnums)) throw new \Exception('JsonStringEnumLocalTest: mapOfNullsAndEnums must not be null.');
		if (is_null($builder_arrayOfMapsOfEnums)) throw new \Exception('JsonStringEnumLocalTest: arrayOfMapsOfEnums must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfEnums)) throw new \Exception('JsonStringEnumLocalTest: arrayOfNullsAndMapsOfEnums must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndEnums)) throw new \Exception('JsonStringEnumLocalTest: arrayOfMapsOfNullsAndEnums must not be null.');
		if (is_null($builder_mapOfArraysOfEnums)) throw new \Exception('JsonStringEnumLocalTest: mapOfArraysOfEnums must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfEnums)) throw new \Exception('JsonStringEnumLocalTest: mapOfNullsAndArraysOfEnums must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndEnums)) throw new \Exception('JsonStringEnumLocalTest: mapOfArraysOfNullsAndEnums must not be null.');
		
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