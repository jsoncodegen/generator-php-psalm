<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests number values.
 */
final class JsonNumberTest
{

	/**
	 * @readonly
	 * @var int|float
	 */
	public $count;

	/**
	 * This is a count.
	 * @readonly
	 * @var int|float
	 */
	public $countWithDescription;

	/**
	 * @readonly
	 * @var int|float|null
	 */
	public $countOrNull;

	/**
	 * @readonly
	 * @var list<int|float>
	 */
	public $arrayOfCounts;

	/**
	 * @readonly
	 * @var list<list<int|float>>
	 */
	public $arrayOfArraysOfCounts;

	/**
	 * @readonly
	 * @var list<int|float|null>
	 */
	public $arrayOfCountsAndNulls;

	/**
	 * @readonly
	 * @var list<int|float>|null
	 */
	public $arrayOfCountsOrNull;

	/**
	 * @readonly
	 * @var list<int|float|null>|null
	 */
	public $arrayOfCountsAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<int|float>
	 */
	public $mapOfCounts;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<int|float>>
	 */
	public $mapOfMapsOfCounts;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<int|float|null>
	 */
	public $mapOfNullsAndCounts;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<int|float>|null
	 */
	public $mapOfCountsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<int|float|null>|null
	 */
	public $mapOfNullsAndCountsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float>>
	 */
	public $arrayOfMapsOfCounts;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	public $arrayOfMapsOfCountsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float>|null>
	 */
	public $arrayOfNullsAndMapsOfCounts;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float|null>>
	 */
	public $arrayOfMapsOfNullsAndCounts;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndCountsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float>>
	 */
	public $mapOfArraysOfCounts;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float>>|null
	 */
	public $mapOfArraysOfCountsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float>|null>
	 */
	public $mapOfNullsAndArraysOfCounts;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float|null>>
	 */
	public $mapOfArraysOfNullsAndCounts;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndCountsOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonNumberTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_count = $builder->getCount();
		$builder_countWithDescription = $builder->getCountWithDescription();
		$builder_countOrNull = $builder->getCountOrNull();
		$builder_arrayOfCounts = $builder->getArrayOfCounts();
		$builder_arrayOfArraysOfCounts = $builder->getArrayOfArraysOfCounts();
		$builder_arrayOfCountsAndNulls = $builder->getArrayOfCountsAndNulls();
		$builder_arrayOfCountsOrNull = $builder->getArrayOfCountsOrNull();
		$builder_arrayOfCountsAndNullsOrNull = $builder->getArrayOfCountsAndNullsOrNull();
		$builder_mapOfCounts = $builder->getMapOfCounts();
		$builder_mapOfMapsOfCounts = $builder->getMapOfMapsOfCounts();
		$builder_mapOfNullsAndCounts = $builder->getMapOfNullsAndCounts();
		$builder_mapOfCountsOrNull = $builder->getMapOfCountsOrNull();
		$builder_mapOfNullsAndCountsOrNull = $builder->getMapOfNullsAndCountsOrNull();
		$builder_arrayOfMapsOfCounts = $builder->getArrayOfMapsOfCounts();
		$builder_arrayOfMapsOfCountsOrNull = $builder->getArrayOfMapsOfCountsOrNull();
		$builder_arrayOfNullsAndMapsOfCounts = $builder->getArrayOfNullsAndMapsOfCounts();
		$builder_arrayOfMapsOfNullsAndCounts = $builder->getArrayOfMapsOfNullsAndCounts();
		$builder_arrayOfNullsAndMapsOfNullsAndCountsOrNull = $builder->getArrayOfNullsAndMapsOfNullsAndCountsOrNull();
		$builder_mapOfArraysOfCounts = $builder->getMapOfArraysOfCounts();
		$builder_mapOfArraysOfCountsOrNull = $builder->getMapOfArraysOfCountsOrNull();
		$builder_mapOfNullsAndArraysOfCounts = $builder->getMapOfNullsAndArraysOfCounts();
		$builder_mapOfArraysOfNullsAndCounts = $builder->getMapOfArraysOfNullsAndCounts();
		$builder_mapOfNullsAndArraysOfNullsAndCountsOrNull = $builder->getMapOfNullsAndArraysOfNullsAndCountsOrNull();
		
		if (is_null($builder_count)) throw new \Exception('JsonNumberTest: count must not be null.');
		if (is_null($builder_countWithDescription)) throw new \Exception('JsonNumberTest: countWithDescription must not be null.');
		if (is_null($builder_arrayOfCounts)) throw new \Exception('JsonNumberTest: arrayOfCounts must not be null.');
		if (is_null($builder_arrayOfArraysOfCounts)) throw new \Exception('JsonNumberTest: arrayOfArraysOfCounts must not be null.');
		if (is_null($builder_arrayOfCountsAndNulls)) throw new \Exception('JsonNumberTest: arrayOfCountsAndNulls must not be null.');
		if (is_null($builder_mapOfCounts)) throw new \Exception('JsonNumberTest: mapOfCounts must not be null.');
		if (is_null($builder_mapOfMapsOfCounts)) throw new \Exception('JsonNumberTest: mapOfMapsOfCounts must not be null.');
		if (is_null($builder_mapOfNullsAndCounts)) throw new \Exception('JsonNumberTest: mapOfNullsAndCounts must not be null.');
		if (is_null($builder_arrayOfMapsOfCounts)) throw new \Exception('JsonNumberTest: arrayOfMapsOfCounts must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfCounts)) throw new \Exception('JsonNumberTest: arrayOfNullsAndMapsOfCounts must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndCounts)) throw new \Exception('JsonNumberTest: arrayOfMapsOfNullsAndCounts must not be null.');
		if (is_null($builder_mapOfArraysOfCounts)) throw new \Exception('JsonNumberTest: mapOfArraysOfCounts must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfCounts)) throw new \Exception('JsonNumberTest: mapOfNullsAndArraysOfCounts must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndCounts)) throw new \Exception('JsonNumberTest: mapOfArraysOfNullsAndCounts must not be null.');
		
		$this->count = $builder_count;
		$this->countWithDescription = $builder_countWithDescription;
		$this->countOrNull = $builder_countOrNull;
		$this->arrayOfCounts = $builder_arrayOfCounts;
		$this->arrayOfArraysOfCounts = $builder_arrayOfArraysOfCounts;
		$this->arrayOfCountsAndNulls = $builder_arrayOfCountsAndNulls;
		$this->arrayOfCountsOrNull = $builder_arrayOfCountsOrNull;
		$this->arrayOfCountsAndNullsOrNull = $builder_arrayOfCountsAndNullsOrNull;
		$this->mapOfCounts = $builder_mapOfCounts;
		$this->mapOfMapsOfCounts = $builder_mapOfMapsOfCounts;
		$this->mapOfNullsAndCounts = $builder_mapOfNullsAndCounts;
		$this->mapOfCountsOrNull = $builder_mapOfCountsOrNull;
		$this->mapOfNullsAndCountsOrNull = $builder_mapOfNullsAndCountsOrNull;
		$this->arrayOfMapsOfCounts = $builder_arrayOfMapsOfCounts;
		$this->arrayOfMapsOfCountsOrNull = $builder_arrayOfMapsOfCountsOrNull;
		$this->arrayOfNullsAndMapsOfCounts = $builder_arrayOfNullsAndMapsOfCounts;
		$this->arrayOfMapsOfNullsAndCounts = $builder_arrayOfMapsOfNullsAndCounts;
		$this->arrayOfNullsAndMapsOfNullsAndCountsOrNull = $builder_arrayOfNullsAndMapsOfNullsAndCountsOrNull;
		$this->mapOfArraysOfCounts = $builder_mapOfArraysOfCounts;
		$this->mapOfArraysOfCountsOrNull = $builder_mapOfArraysOfCountsOrNull;
		$this->mapOfNullsAndArraysOfCounts = $builder_mapOfNullsAndArraysOfCounts;
		$this->mapOfArraysOfNullsAndCounts = $builder_mapOfArraysOfNullsAndCounts;
		$this->mapOfNullsAndArraysOfNullsAndCountsOrNull = $builder_mapOfNullsAndArraysOfNullsAndCountsOrNull;
	}
}