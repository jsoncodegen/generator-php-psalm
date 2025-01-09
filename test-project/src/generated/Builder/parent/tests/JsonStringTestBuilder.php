<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests string values.
 * @template __Has_name__
 * @template __Has_nameWithDescription__
 * @template __Has_arrayOfNames__
 * @template __Has_arrayOfArraysOfNames__
 * @template __Has_arrayOfNamesAndNulls__
 * @template __Has_mapOfNames__
 * @template __Has_mapOfMapsOfNames__
 * @template __Has_mapOfNullsAndNames__
 * @template __Has_arrayOfMapsOfNames__
 * @template __Has_arrayOfNullsAndMapsOfNames__
 * @template __Has_arrayOfMapsOfNullsAndNames__
 * @template __Has_mapOfArraysOfNames__
 * @template __Has_mapOfNullsAndArraysOfNames__
 * @template __Has_mapOfArraysOfNullsAndNames__
 */
final class JsonStringTestBuilder
{

	/**
	 * @var string|null
	 */
	private $name = null;

	/**
	 * This is a name.
	 * @var string|null
	 */
	private $nameWithDescription = null;

	/**
	 * @var string|null
	 */
	private $nameOrNull = null;

	/**
	 * @var list<string>|null
	 */
	private $arrayOfNames = null;

	/**
	 * @var list<list<string>>|null
	 */
	private $arrayOfArraysOfNames = null;

	/**
	 * @var list<string|null>|null
	 */
	private $arrayOfNamesAndNulls = null;

	/**
	 * @var list<string>|null
	 */
	private $arrayOfNamesOrNull = null;

	/**
	 * @var list<string|null>|null
	 */
	private $arrayOfNamesAndNullsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<string>|null
	 */
	private $mapOfNames = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	private $mapOfMapsOfNames = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<string|null>|null
	 */
	private $mapOfNullsAndNames = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<string>|null
	 */
	private $mapOfNamesOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<string|null>|null
	 */
	private $mapOfNullsAndNamesOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	private $arrayOfMapsOfNames = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	private $arrayOfMapsOfNamesOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<string>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNames = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<string|null>>|null
	 */
	private $arrayOfMapsOfNullsAndNames = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<string|null>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNullsAndNamesOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<string>>|null
	 */
	private $mapOfArraysOfNames = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<string>>|null
	 */
	private $mapOfArraysOfNamesOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<string>|null>|null
	 */
	private $mapOfNullsAndArraysOfNames = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<string|null>>|null
	 */
	private $mapOfArraysOfNullsAndNames = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<string|null>|null>|null
	 */
	private $mapOfNullsAndArraysOfNullsAndNamesOrNull = null;

	/**
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $value
	 * @return JsonStringTestBuilder<"OK", __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setName($value)
	{
		$this->name = $value;
		/**
		 * @var JsonStringTestBuilder<"OK", __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * This is a name.
	 * @return string|null
	 */
	public function getNameWithDescription()
	{
		return $this->nameWithDescription;
	}

	/**
	 * This is a name.
	 * @param string $value
	 * @return JsonStringTestBuilder<__Has_name__, "OK", __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setNameWithDescription($value)
	{
		$this->nameWithDescription = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, "OK", __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return string|null
	 */
	public function getNameOrNull()
	{
		return $this->nameOrNull;
	}

	/**
	 * @param string|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setNameOrNull($value)
	{
		$this->nameOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<string>|null
	 */
	public function getArrayOfNames()
	{
		return $this->arrayOfNames;
	}

	/**
	 * @param list<string> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, "OK", __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfNames($value)
	{
		$this->arrayOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, "OK", __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<list<string>>|null
	 */
	public function getArrayOfArraysOfNames()
	{
		return $this->arrayOfArraysOfNames;
	}

	/**
	 * @param list<list<string>> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, "OK", __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfArraysOfNames($value)
	{
		$this->arrayOfArraysOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, "OK", __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<string|null>|null
	 */
	public function getArrayOfNamesAndNulls()
	{
		return $this->arrayOfNamesAndNulls;
	}

	/**
	 * @param list<string|null> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, "OK", __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfNamesAndNulls($value)
	{
		$this->arrayOfNamesAndNulls = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, "OK", __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<string>|null
	 */
	public function getArrayOfNamesOrNull()
	{
		return $this->arrayOfNamesOrNull;
	}

	/**
	 * @param list<string>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfNamesOrNull($value)
	{
		$this->arrayOfNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<string|null>|null
	 */
	public function getArrayOfNamesAndNullsOrNull()
	{
		return $this->arrayOfNamesAndNullsOrNull;
	}

	/**
	 * @param list<string|null>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfNamesAndNullsOrNull($value)
	{
		$this->arrayOfNamesAndNullsOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<string>|null
	 */
	public function getMapOfNames()
	{
		return $this->mapOfNames;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<string> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, "OK", __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfNames($value)
	{
		$this->mapOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, "OK", __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	public function getMapOfMapsOfNames()
	{
		return $this->mapOfMapsOfNames;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<string>> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, "OK", __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfMapsOfNames($value)
	{
		$this->mapOfMapsOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, "OK", __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<string|null>|null
	 */
	public function getMapOfNullsAndNames()
	{
		return $this->mapOfNullsAndNames;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<string|null> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, "OK", __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfNullsAndNames($value)
	{
		$this->mapOfNullsAndNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, "OK", __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<string>|null
	 */
	public function getMapOfNamesOrNull()
	{
		return $this->mapOfNamesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<string>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfNamesOrNull($value)
	{
		$this->mapOfNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<string|null>|null
	 */
	public function getMapOfNullsAndNamesOrNull()
	{
		return $this->mapOfNullsAndNamesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<string|null>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfNullsAndNamesOrNull($value)
	{
		$this->mapOfNullsAndNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	public function getArrayOfMapsOfNames()
	{
		return $this->arrayOfMapsOfNames;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<string>> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, "OK", __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfMapsOfNames($value)
	{
		$this->arrayOfMapsOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, "OK", __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<string>>|null
	 */
	public function getArrayOfMapsOfNamesOrNull()
	{
		return $this->arrayOfMapsOfNamesOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<string>>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfMapsOfNamesOrNull($value)
	{
		$this->arrayOfMapsOfNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<string>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNames()
	{
		return $this->arrayOfNullsAndMapsOfNames;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<string>|null> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, "OK", __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfNullsAndMapsOfNames($value)
	{
		$this->arrayOfNullsAndMapsOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, "OK", __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<string|null>>|null
	 */
	public function getArrayOfMapsOfNullsAndNames()
	{
		return $this->arrayOfMapsOfNullsAndNames;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<string|null>> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, "OK", __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfMapsOfNullsAndNames($value)
	{
		$this->arrayOfMapsOfNullsAndNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, "OK", __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<string|null>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNullsAndNamesOrNull()
	{
		return $this->arrayOfNullsAndMapsOfNullsAndNamesOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<string|null>|null>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setArrayOfNullsAndMapsOfNullsAndNamesOrNull($value)
	{
		$this->arrayOfNullsAndMapsOfNullsAndNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<string>>|null
	 */
	public function getMapOfArraysOfNames()
	{
		return $this->mapOfArraysOfNames;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<string>> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, "OK", __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfArraysOfNames($value)
	{
		$this->mapOfArraysOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, "OK", __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<string>>|null
	 */
	public function getMapOfArraysOfNamesOrNull()
	{
		return $this->mapOfArraysOfNamesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<string>>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfArraysOfNamesOrNull($value)
	{
		$this->mapOfArraysOfNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<string>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNames()
	{
		return $this->mapOfNullsAndArraysOfNames;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<string>|null> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, "OK", __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfNullsAndArraysOfNames($value)
	{
		$this->mapOfNullsAndArraysOfNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, "OK", __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<string|null>>|null
	 */
	public function getMapOfArraysOfNullsAndNames()
	{
		return $this->mapOfArraysOfNullsAndNames;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<string|null>> $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, "OK">
	 */
	public function setMapOfArraysOfNullsAndNames($value)
	{
		$this->mapOfArraysOfNullsAndNames = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<string|null>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNullsAndNamesOrNull()
	{
		return $this->mapOfNullsAndArraysOfNullsAndNamesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<string|null>|null>|null $value
	 * @return JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__>
	 */
	public function setMapOfNullsAndArraysOfNullsAndNamesOrNull($value)
	{
		$this->mapOfNullsAndArraysOfNullsAndNamesOrNull = $value;
		/**
		 * @var JsonStringTestBuilder<__Has_name__, __Has_nameWithDescription__, __Has_arrayOfNames__, __Has_arrayOfArraysOfNames__, __Has_arrayOfNamesAndNulls__, __Has_mapOfNames__, __Has_mapOfMapsOfNames__, __Has_mapOfNullsAndNames__, __Has_arrayOfMapsOfNames__, __Has_arrayOfNullsAndMapsOfNames__, __Has_arrayOfMapsOfNullsAndNames__, __Has_mapOfArraysOfNames__, __Has_mapOfNullsAndArraysOfNames__, __Has_mapOfArraysOfNullsAndNames__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringTest $value
	 * @return JsonStringTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonStringTestBuilder())
			->setName($value->name)
			->setNameWithDescription($value->nameWithDescription)
			->setNameOrNull($value->nameOrNull)
			->setArrayOfNames($value->arrayOfNames)
			->setArrayOfArraysOfNames($value->arrayOfArraysOfNames)
			->setArrayOfNamesAndNulls($value->arrayOfNamesAndNulls)
			->setArrayOfNamesOrNull($value->arrayOfNamesOrNull)
			->setArrayOfNamesAndNullsOrNull($value->arrayOfNamesAndNullsOrNull)
			->setMapOfNames($value->mapOfNames)
			->setMapOfMapsOfNames($value->mapOfMapsOfNames)
			->setMapOfNullsAndNames($value->mapOfNullsAndNames)
			->setMapOfNamesOrNull($value->mapOfNamesOrNull)
			->setMapOfNullsAndNamesOrNull($value->mapOfNullsAndNamesOrNull)
			->setArrayOfMapsOfNames($value->arrayOfMapsOfNames)
			->setArrayOfMapsOfNamesOrNull($value->arrayOfMapsOfNamesOrNull)
			->setArrayOfNullsAndMapsOfNames($value->arrayOfNullsAndMapsOfNames)
			->setArrayOfMapsOfNullsAndNames($value->arrayOfMapsOfNullsAndNames)
			->setArrayOfNullsAndMapsOfNullsAndNamesOrNull($value->arrayOfNullsAndMapsOfNullsAndNamesOrNull)
			->setMapOfArraysOfNames($value->mapOfArraysOfNames)
			->setMapOfArraysOfNamesOrNull($value->mapOfArraysOfNamesOrNull)
			->setMapOfNullsAndArraysOfNames($value->mapOfNullsAndArraysOfNames)
			->setMapOfArraysOfNullsAndNames($value->mapOfArraysOfNullsAndNames)
			->setMapOfNullsAndArraysOfNullsAndNamesOrNull($value->mapOfNullsAndArraysOfNullsAndNamesOrNull);
	}
}