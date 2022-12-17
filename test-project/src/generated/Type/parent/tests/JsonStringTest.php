<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests string values.
 */
final class JsonStringTest
{

	/**
	 * @readonly
	 * @var string
	 */
	public $name;

	/**
	 * This is a name.
	 * @readonly
	 * @var string
	 */
	public $nameWithDescription;

	/**
	 * @readonly
	 * @var string|null
	 */
	public $nameOrNull;

	/**
	 * @readonly
	 * @var list<string>
	 */
	public $arrayOfNames;

	/**
	 * @readonly
	 * @var list<list<string>>
	 */
	public $arrayOfArraysOfNames;

	/**
	 * @readonly
	 * @var list<string|null>
	 */
	public $arrayOfNamesAndNulls;

	/**
	 * @readonly
	 * @var list<string>|null
	 */
	public $arrayOfNamesOrNull;

	/**
	 * @readonly
	 * @var list<string|null>|null
	 */
	public $arrayOfNamesAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<string>
	 */
	public $mapOfNames;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<string>>
	 */
	public $mapOfMapsOfNames;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<string|null>
	 */
	public $mapOfNullsAndNames;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<string>|null
	 */
	public $mapOfNamesOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<string|null>|null
	 */
	public $mapOfNullsAndNamesOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<string>>
	 */
	public $arrayOfMapsOfNames;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	public $arrayOfMapsOfNamesOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<string>|null>
	 */
	public $arrayOfNullsAndMapsOfNames;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<string|null>>
	 */
	public $arrayOfMapsOfNullsAndNames;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<string|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndNamesOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<string>>
	 */
	public $mapOfArraysOfNames;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<string>>|null
	 */
	public $mapOfArraysOfNamesOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<string>|null>
	 */
	public $mapOfNullsAndArraysOfNames;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<string|null>>
	 */
	public $mapOfArraysOfNullsAndNames;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<string|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndNamesOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonStringTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_name = $builder->getName();
		$builder_nameWithDescription = $builder->getNameWithDescription();
		$builder_nameOrNull = $builder->getNameOrNull();
		$builder_arrayOfNames = $builder->getArrayOfNames();
		$builder_arrayOfArraysOfNames = $builder->getArrayOfArraysOfNames();
		$builder_arrayOfNamesAndNulls = $builder->getArrayOfNamesAndNulls();
		$builder_arrayOfNamesOrNull = $builder->getArrayOfNamesOrNull();
		$builder_arrayOfNamesAndNullsOrNull = $builder->getArrayOfNamesAndNullsOrNull();
		$builder_mapOfNames = $builder->getMapOfNames();
		$builder_mapOfMapsOfNames = $builder->getMapOfMapsOfNames();
		$builder_mapOfNullsAndNames = $builder->getMapOfNullsAndNames();
		$builder_mapOfNamesOrNull = $builder->getMapOfNamesOrNull();
		$builder_mapOfNullsAndNamesOrNull = $builder->getMapOfNullsAndNamesOrNull();
		$builder_arrayOfMapsOfNames = $builder->getArrayOfMapsOfNames();
		$builder_arrayOfMapsOfNamesOrNull = $builder->getArrayOfMapsOfNamesOrNull();
		$builder_arrayOfNullsAndMapsOfNames = $builder->getArrayOfNullsAndMapsOfNames();
		$builder_arrayOfMapsOfNullsAndNames = $builder->getArrayOfMapsOfNullsAndNames();
		$builder_arrayOfNullsAndMapsOfNullsAndNamesOrNull = $builder->getArrayOfNullsAndMapsOfNullsAndNamesOrNull();
		$builder_mapOfArraysOfNames = $builder->getMapOfArraysOfNames();
		$builder_mapOfArraysOfNamesOrNull = $builder->getMapOfArraysOfNamesOrNull();
		$builder_mapOfNullsAndArraysOfNames = $builder->getMapOfNullsAndArraysOfNames();
		$builder_mapOfArraysOfNullsAndNames = $builder->getMapOfArraysOfNullsAndNames();
		$builder_mapOfNullsAndArraysOfNullsAndNamesOrNull = $builder->getMapOfNullsAndArraysOfNullsAndNamesOrNull();
		
		if (is_null($builder_name)) throw new \Exception('JsonStringTest: name must not be null.');
		if (is_null($builder_nameWithDescription)) throw new \Exception('JsonStringTest: nameWithDescription must not be null.');
		if (is_null($builder_arrayOfNames)) throw new \Exception('JsonStringTest: arrayOfNames must not be null.');
		if (is_null($builder_arrayOfArraysOfNames)) throw new \Exception('JsonStringTest: arrayOfArraysOfNames must not be null.');
		if (is_null($builder_arrayOfNamesAndNulls)) throw new \Exception('JsonStringTest: arrayOfNamesAndNulls must not be null.');
		if (is_null($builder_mapOfNames)) throw new \Exception('JsonStringTest: mapOfNames must not be null.');
		if (is_null($builder_mapOfMapsOfNames)) throw new \Exception('JsonStringTest: mapOfMapsOfNames must not be null.');
		if (is_null($builder_mapOfNullsAndNames)) throw new \Exception('JsonStringTest: mapOfNullsAndNames must not be null.');
		if (is_null($builder_arrayOfMapsOfNames)) throw new \Exception('JsonStringTest: arrayOfMapsOfNames must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfNames)) throw new \Exception('JsonStringTest: arrayOfNullsAndMapsOfNames must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndNames)) throw new \Exception('JsonStringTest: arrayOfMapsOfNullsAndNames must not be null.');
		if (is_null($builder_mapOfArraysOfNames)) throw new \Exception('JsonStringTest: mapOfArraysOfNames must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfNames)) throw new \Exception('JsonStringTest: mapOfNullsAndArraysOfNames must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndNames)) throw new \Exception('JsonStringTest: mapOfArraysOfNullsAndNames must not be null.');
		
		$this->name = $builder_name;
		$this->nameWithDescription = $builder_nameWithDescription;
		$this->nameOrNull = $builder_nameOrNull;
		$this->arrayOfNames = $builder_arrayOfNames;
		$this->arrayOfArraysOfNames = $builder_arrayOfArraysOfNames;
		$this->arrayOfNamesAndNulls = $builder_arrayOfNamesAndNulls;
		$this->arrayOfNamesOrNull = $builder_arrayOfNamesOrNull;
		$this->arrayOfNamesAndNullsOrNull = $builder_arrayOfNamesAndNullsOrNull;
		$this->mapOfNames = $builder_mapOfNames;
		$this->mapOfMapsOfNames = $builder_mapOfMapsOfNames;
		$this->mapOfNullsAndNames = $builder_mapOfNullsAndNames;
		$this->mapOfNamesOrNull = $builder_mapOfNamesOrNull;
		$this->mapOfNullsAndNamesOrNull = $builder_mapOfNullsAndNamesOrNull;
		$this->arrayOfMapsOfNames = $builder_arrayOfMapsOfNames;
		$this->arrayOfMapsOfNamesOrNull = $builder_arrayOfMapsOfNamesOrNull;
		$this->arrayOfNullsAndMapsOfNames = $builder_arrayOfNullsAndMapsOfNames;
		$this->arrayOfMapsOfNullsAndNames = $builder_arrayOfMapsOfNullsAndNames;
		$this->arrayOfNullsAndMapsOfNullsAndNamesOrNull = $builder_arrayOfNullsAndMapsOfNullsAndNamesOrNull;
		$this->mapOfArraysOfNames = $builder_mapOfArraysOfNames;
		$this->mapOfArraysOfNamesOrNull = $builder_mapOfArraysOfNamesOrNull;
		$this->mapOfNullsAndArraysOfNames = $builder_mapOfNullsAndArraysOfNames;
		$this->mapOfArraysOfNullsAndNames = $builder_mapOfArraysOfNullsAndNames;
		$this->mapOfNullsAndArraysOfNullsAndNamesOrNull = $builder_mapOfNullsAndArraysOfNullsAndNamesOrNull;
	}
}