<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests boolean values.
 */
final class JsonBooleanTest
{

	/**
	 * @readonly
	 * @var bool
	 */
	public $flag;

	/**
	 * This is a flag.
	 * @readonly
	 * @var bool
	 */
	public $flagWithDescription;

	/**
	 * @readonly
	 * @var bool|null
	 */
	public $flagOrNull;

	/**
	 * @readonly
	 * @var list<bool>
	 */
	public $arrayOfFlags;

	/**
	 * @readonly
	 * @var list<list<bool>>
	 */
	public $arrayOfArraysOfFlags;

	/**
	 * @readonly
	 * @var list<bool|null>
	 */
	public $arrayOfFlagsAndNulls;

	/**
	 * @readonly
	 * @var list<bool>|null
	 */
	public $arrayOfFlagsOrNull;

	/**
	 * @readonly
	 * @var list<bool|null>|null
	 */
	public $arrayOfFlagsAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<bool>
	 */
	public $mapOfFlags;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<bool>>
	 */
	public $mapOfMapsOfFlags;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<bool|null>
	 */
	public $mapOfNullsAndFlags;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<bool>|null
	 */
	public $mapOfFlagsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<bool|null>|null
	 */
	public $mapOfNullsAndFlagsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool>>
	 */
	public $arrayOfMapsOfFlags;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	public $arrayOfMapsOfFlagsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool>|null>
	 */
	public $arrayOfNullsAndMapsOfFlags;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool|null>>
	 */
	public $arrayOfMapsOfNullsAndFlags;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndFlagsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool>>
	 */
	public $mapOfArraysOfFlags;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool>>|null
	 */
	public $mapOfArraysOfFlagsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool>|null>
	 */
	public $mapOfNullsAndArraysOfFlags;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool|null>>
	 */
	public $mapOfArraysOfNullsAndFlags;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndFlagsOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonBooleanTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_flag = $builder->getFlag();
		$builder_flagWithDescription = $builder->getFlagWithDescription();
		$builder_flagOrNull = $builder->getFlagOrNull();
		$builder_arrayOfFlags = $builder->getArrayOfFlags();
		$builder_arrayOfArraysOfFlags = $builder->getArrayOfArraysOfFlags();
		$builder_arrayOfFlagsAndNulls = $builder->getArrayOfFlagsAndNulls();
		$builder_arrayOfFlagsOrNull = $builder->getArrayOfFlagsOrNull();
		$builder_arrayOfFlagsAndNullsOrNull = $builder->getArrayOfFlagsAndNullsOrNull();
		$builder_mapOfFlags = $builder->getMapOfFlags();
		$builder_mapOfMapsOfFlags = $builder->getMapOfMapsOfFlags();
		$builder_mapOfNullsAndFlags = $builder->getMapOfNullsAndFlags();
		$builder_mapOfFlagsOrNull = $builder->getMapOfFlagsOrNull();
		$builder_mapOfNullsAndFlagsOrNull = $builder->getMapOfNullsAndFlagsOrNull();
		$builder_arrayOfMapsOfFlags = $builder->getArrayOfMapsOfFlags();
		$builder_arrayOfMapsOfFlagsOrNull = $builder->getArrayOfMapsOfFlagsOrNull();
		$builder_arrayOfNullsAndMapsOfFlags = $builder->getArrayOfNullsAndMapsOfFlags();
		$builder_arrayOfMapsOfNullsAndFlags = $builder->getArrayOfMapsOfNullsAndFlags();
		$builder_arrayOfNullsAndMapsOfNullsAndFlagsOrNull = $builder->getArrayOfNullsAndMapsOfNullsAndFlagsOrNull();
		$builder_mapOfArraysOfFlags = $builder->getMapOfArraysOfFlags();
		$builder_mapOfArraysOfFlagsOrNull = $builder->getMapOfArraysOfFlagsOrNull();
		$builder_mapOfNullsAndArraysOfFlags = $builder->getMapOfNullsAndArraysOfFlags();
		$builder_mapOfArraysOfNullsAndFlags = $builder->getMapOfArraysOfNullsAndFlags();
		$builder_mapOfNullsAndArraysOfNullsAndFlagsOrNull = $builder->getMapOfNullsAndArraysOfNullsAndFlagsOrNull();
		
		if (is_null($builder_flag)) throw new \Exception('JsonBooleanTest: flag must not be null.');
		if (is_null($builder_flagWithDescription)) throw new \Exception('JsonBooleanTest: flagWithDescription must not be null.');
		if (is_null($builder_arrayOfFlags)) throw new \Exception('JsonBooleanTest: arrayOfFlags must not be null.');
		if (is_null($builder_arrayOfArraysOfFlags)) throw new \Exception('JsonBooleanTest: arrayOfArraysOfFlags must not be null.');
		if (is_null($builder_arrayOfFlagsAndNulls)) throw new \Exception('JsonBooleanTest: arrayOfFlagsAndNulls must not be null.');
		if (is_null($builder_mapOfFlags)) throw new \Exception('JsonBooleanTest: mapOfFlags must not be null.');
		if (is_null($builder_mapOfMapsOfFlags)) throw new \Exception('JsonBooleanTest: mapOfMapsOfFlags must not be null.');
		if (is_null($builder_mapOfNullsAndFlags)) throw new \Exception('JsonBooleanTest: mapOfNullsAndFlags must not be null.');
		if (is_null($builder_arrayOfMapsOfFlags)) throw new \Exception('JsonBooleanTest: arrayOfMapsOfFlags must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfFlags)) throw new \Exception('JsonBooleanTest: arrayOfNullsAndMapsOfFlags must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndFlags)) throw new \Exception('JsonBooleanTest: arrayOfMapsOfNullsAndFlags must not be null.');
		if (is_null($builder_mapOfArraysOfFlags)) throw new \Exception('JsonBooleanTest: mapOfArraysOfFlags must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfFlags)) throw new \Exception('JsonBooleanTest: mapOfNullsAndArraysOfFlags must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndFlags)) throw new \Exception('JsonBooleanTest: mapOfArraysOfNullsAndFlags must not be null.');
		
		$this->flag = $builder_flag;
		$this->flagWithDescription = $builder_flagWithDescription;
		$this->flagOrNull = $builder_flagOrNull;
		$this->arrayOfFlags = $builder_arrayOfFlags;
		$this->arrayOfArraysOfFlags = $builder_arrayOfArraysOfFlags;
		$this->arrayOfFlagsAndNulls = $builder_arrayOfFlagsAndNulls;
		$this->arrayOfFlagsOrNull = $builder_arrayOfFlagsOrNull;
		$this->arrayOfFlagsAndNullsOrNull = $builder_arrayOfFlagsAndNullsOrNull;
		$this->mapOfFlags = $builder_mapOfFlags;
		$this->mapOfMapsOfFlags = $builder_mapOfMapsOfFlags;
		$this->mapOfNullsAndFlags = $builder_mapOfNullsAndFlags;
		$this->mapOfFlagsOrNull = $builder_mapOfFlagsOrNull;
		$this->mapOfNullsAndFlagsOrNull = $builder_mapOfNullsAndFlagsOrNull;
		$this->arrayOfMapsOfFlags = $builder_arrayOfMapsOfFlags;
		$this->arrayOfMapsOfFlagsOrNull = $builder_arrayOfMapsOfFlagsOrNull;
		$this->arrayOfNullsAndMapsOfFlags = $builder_arrayOfNullsAndMapsOfFlags;
		$this->arrayOfMapsOfNullsAndFlags = $builder_arrayOfMapsOfNullsAndFlags;
		$this->arrayOfNullsAndMapsOfNullsAndFlagsOrNull = $builder_arrayOfNullsAndMapsOfNullsAndFlagsOrNull;
		$this->mapOfArraysOfFlags = $builder_mapOfArraysOfFlags;
		$this->mapOfArraysOfFlagsOrNull = $builder_mapOfArraysOfFlagsOrNull;
		$this->mapOfNullsAndArraysOfFlags = $builder_mapOfNullsAndArraysOfFlags;
		$this->mapOfArraysOfNullsAndFlags = $builder_mapOfArraysOfNullsAndFlags;
		$this->mapOfNullsAndArraysOfNullsAndFlagsOrNull = $builder_mapOfNullsAndArraysOfNullsAndFlagsOrNull;
	}
}