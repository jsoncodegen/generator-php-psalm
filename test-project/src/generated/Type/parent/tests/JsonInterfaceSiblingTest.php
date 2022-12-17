<?php

namespace JCG\Test\generated\Type\parent\tests;

/**
 * This tests interface fields.
 */
final class JsonInterfaceSiblingTest
{

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonInterface
	 */
	public $object_;

	/**
	 * This is an object.
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonInterface
	 */
	public $objectWithDescription;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Type\parent\sibling\JsonInterface|null
	 */
	public $objectOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\sibling\JsonInterface>
	 */
	public $arrayOfObjects;

	/**
	 * @readonly
	 * @var list<list<\JCG\Test\generated\Type\parent\sibling\JsonInterface>>
	 */
	public $arrayOfArraysOfObjects;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>
	 */
	public $arrayOfObjectsAndNulls;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\sibling\JsonInterface>|null
	 */
	public $arrayOfObjectsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>|null
	 */
	public $arrayOfObjectsAndNullsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface>
	 */
	public $mapOfObjects;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface>>
	 */
	public $mapOfMapsOfObjects;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>
	 */
	public $mapOfNullsAndObjects;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface>|null
	 */
	public $mapOfObjectsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>|null
	 */
	public $mapOfNullsAndObjectsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface>>
	 */
	public $arrayOfMapsOfObjects;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface>>|null
	 */
	public $arrayOfMapsOfObjectsOrNull;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface>|null>
	 */
	public $arrayOfNullsAndMapsOfObjects;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>>
	 */
	public $arrayOfMapsOfNullsAndObjects;

	/**
	 * @readonly
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>|null>|null
	 */
	public $arrayOfNullsAndMapsOfNullsAndObjectsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\sibling\JsonInterface>>
	 */
	public $mapOfArraysOfObjects;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\sibling\JsonInterface>>|null
	 */
	public $mapOfArraysOfObjectsOrNull;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\sibling\JsonInterface>|null>
	 */
	public $mapOfNullsAndArraysOfObjects;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>>
	 */
	public $mapOfArraysOfNullsAndObjects;

	/**
	 * @readonly
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\sibling\JsonInterface|null>|null>|null
	 */
	public $mapOfNullsAndArraysOfNullsAndObjectsOrNull;

	/**
	 * @param \JCG\Test\generated\Builder\parent\tests\JsonInterfaceSiblingTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK"> $builder
	 * @throws \Exception
	 */
	public function __construct($builder)
	{
		$builder_object_ = $builder->getObject_();
		$builder_objectWithDescription = $builder->getObjectWithDescription();
		$builder_objectOrNull = $builder->getObjectOrNull();
		$builder_arrayOfObjects = $builder->getArrayOfObjects();
		$builder_arrayOfArraysOfObjects = $builder->getArrayOfArraysOfObjects();
		$builder_arrayOfObjectsAndNulls = $builder->getArrayOfObjectsAndNulls();
		$builder_arrayOfObjectsOrNull = $builder->getArrayOfObjectsOrNull();
		$builder_arrayOfObjectsAndNullsOrNull = $builder->getArrayOfObjectsAndNullsOrNull();
		$builder_mapOfObjects = $builder->getMapOfObjects();
		$builder_mapOfMapsOfObjects = $builder->getMapOfMapsOfObjects();
		$builder_mapOfNullsAndObjects = $builder->getMapOfNullsAndObjects();
		$builder_mapOfObjectsOrNull = $builder->getMapOfObjectsOrNull();
		$builder_mapOfNullsAndObjectsOrNull = $builder->getMapOfNullsAndObjectsOrNull();
		$builder_arrayOfMapsOfObjects = $builder->getArrayOfMapsOfObjects();
		$builder_arrayOfMapsOfObjectsOrNull = $builder->getArrayOfMapsOfObjectsOrNull();
		$builder_arrayOfNullsAndMapsOfObjects = $builder->getArrayOfNullsAndMapsOfObjects();
		$builder_arrayOfMapsOfNullsAndObjects = $builder->getArrayOfMapsOfNullsAndObjects();
		$builder_arrayOfNullsAndMapsOfNullsAndObjectsOrNull = $builder->getArrayOfNullsAndMapsOfNullsAndObjectsOrNull();
		$builder_mapOfArraysOfObjects = $builder->getMapOfArraysOfObjects();
		$builder_mapOfArraysOfObjectsOrNull = $builder->getMapOfArraysOfObjectsOrNull();
		$builder_mapOfNullsAndArraysOfObjects = $builder->getMapOfNullsAndArraysOfObjects();
		$builder_mapOfArraysOfNullsAndObjects = $builder->getMapOfArraysOfNullsAndObjects();
		$builder_mapOfNullsAndArraysOfNullsAndObjectsOrNull = $builder->getMapOfNullsAndArraysOfNullsAndObjectsOrNull();
		
		if (is_null($builder_object_)) throw new \Exception('JsonInterfaceSiblingTest: object_ must not be null.');
		if (is_null($builder_objectWithDescription)) throw new \Exception('JsonInterfaceSiblingTest: objectWithDescription must not be null.');
		if (is_null($builder_arrayOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: arrayOfObjects must not be null.');
		if (is_null($builder_arrayOfArraysOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: arrayOfArraysOfObjects must not be null.');
		if (is_null($builder_arrayOfObjectsAndNulls)) throw new \Exception('JsonInterfaceSiblingTest: arrayOfObjectsAndNulls must not be null.');
		if (is_null($builder_mapOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: mapOfObjects must not be null.');
		if (is_null($builder_mapOfMapsOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: mapOfMapsOfObjects must not be null.');
		if (is_null($builder_mapOfNullsAndObjects)) throw new \Exception('JsonInterfaceSiblingTest: mapOfNullsAndObjects must not be null.');
		if (is_null($builder_arrayOfMapsOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: arrayOfMapsOfObjects must not be null.');
		if (is_null($builder_arrayOfNullsAndMapsOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: arrayOfNullsAndMapsOfObjects must not be null.');
		if (is_null($builder_arrayOfMapsOfNullsAndObjects)) throw new \Exception('JsonInterfaceSiblingTest: arrayOfMapsOfNullsAndObjects must not be null.');
		if (is_null($builder_mapOfArraysOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: mapOfArraysOfObjects must not be null.');
		if (is_null($builder_mapOfNullsAndArraysOfObjects)) throw new \Exception('JsonInterfaceSiblingTest: mapOfNullsAndArraysOfObjects must not be null.');
		if (is_null($builder_mapOfArraysOfNullsAndObjects)) throw new \Exception('JsonInterfaceSiblingTest: mapOfArraysOfNullsAndObjects must not be null.');
		
		$this->object_ = $builder_object_;
		$this->objectWithDescription = $builder_objectWithDescription;
		$this->objectOrNull = $builder_objectOrNull;
		$this->arrayOfObjects = $builder_arrayOfObjects;
		$this->arrayOfArraysOfObjects = $builder_arrayOfArraysOfObjects;
		$this->arrayOfObjectsAndNulls = $builder_arrayOfObjectsAndNulls;
		$this->arrayOfObjectsOrNull = $builder_arrayOfObjectsOrNull;
		$this->arrayOfObjectsAndNullsOrNull = $builder_arrayOfObjectsAndNullsOrNull;
		$this->mapOfObjects = $builder_mapOfObjects;
		$this->mapOfMapsOfObjects = $builder_mapOfMapsOfObjects;
		$this->mapOfNullsAndObjects = $builder_mapOfNullsAndObjects;
		$this->mapOfObjectsOrNull = $builder_mapOfObjectsOrNull;
		$this->mapOfNullsAndObjectsOrNull = $builder_mapOfNullsAndObjectsOrNull;
		$this->arrayOfMapsOfObjects = $builder_arrayOfMapsOfObjects;
		$this->arrayOfMapsOfObjectsOrNull = $builder_arrayOfMapsOfObjectsOrNull;
		$this->arrayOfNullsAndMapsOfObjects = $builder_arrayOfNullsAndMapsOfObjects;
		$this->arrayOfMapsOfNullsAndObjects = $builder_arrayOfMapsOfNullsAndObjects;
		$this->arrayOfNullsAndMapsOfNullsAndObjectsOrNull = $builder_arrayOfNullsAndMapsOfNullsAndObjectsOrNull;
		$this->mapOfArraysOfObjects = $builder_mapOfArraysOfObjects;
		$this->mapOfArraysOfObjectsOrNull = $builder_mapOfArraysOfObjectsOrNull;
		$this->mapOfNullsAndArraysOfObjects = $builder_mapOfNullsAndArraysOfObjects;
		$this->mapOfArraysOfNullsAndObjects = $builder_mapOfArraysOfNullsAndObjects;
		$this->mapOfNullsAndArraysOfNullsAndObjectsOrNull = $builder_mapOfNullsAndArraysOfNullsAndObjectsOrNull;
	}
}