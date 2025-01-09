<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests number values.
 * @template __Has_count__
 * @template __Has_countWithDescription__
 * @template __Has_arrayOfCounts__
 * @template __Has_arrayOfArraysOfCounts__
 * @template __Has_arrayOfCountsAndNulls__
 * @template __Has_mapOfCounts__
 * @template __Has_mapOfMapsOfCounts__
 * @template __Has_mapOfNullsAndCounts__
 * @template __Has_arrayOfMapsOfCounts__
 * @template __Has_arrayOfNullsAndMapsOfCounts__
 * @template __Has_arrayOfMapsOfNullsAndCounts__
 * @template __Has_mapOfArraysOfCounts__
 * @template __Has_mapOfNullsAndArraysOfCounts__
 * @template __Has_mapOfArraysOfNullsAndCounts__
 */
final class JsonNumberTestBuilder
{

	/**
	 * @var int|float|null
	 */
	private $count = null;

	/**
	 * This is a count.
	 * @var int|float|null
	 */
	private $countWithDescription = null;

	/**
	 * @var int|float|null
	 */
	private $countOrNull = null;

	/**
	 * @var list<int|float>|null
	 */
	private $arrayOfCounts = null;

	/**
	 * @var list<list<int|float>>|null
	 */
	private $arrayOfArraysOfCounts = null;

	/**
	 * @var list<int|float|null>|null
	 */
	private $arrayOfCountsAndNulls = null;

	/**
	 * @var list<int|float>|null
	 */
	private $arrayOfCountsOrNull = null;

	/**
	 * @var list<int|float|null>|null
	 */
	private $arrayOfCountsAndNullsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<int|float>|null
	 */
	private $mapOfCounts = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	private $mapOfMapsOfCounts = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<int|float|null>|null
	 */
	private $mapOfNullsAndCounts = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<int|float>|null
	 */
	private $mapOfCountsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<int|float|null>|null
	 */
	private $mapOfNullsAndCountsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	private $arrayOfMapsOfCounts = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	private $arrayOfMapsOfCountsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float>|null>|null
	 */
	private $arrayOfNullsAndMapsOfCounts = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float|null>>|null
	 */
	private $arrayOfMapsOfNullsAndCounts = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<int|float|null>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNullsAndCountsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float>>|null
	 */
	private $mapOfArraysOfCounts = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float>>|null
	 */
	private $mapOfArraysOfCountsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float>|null>|null
	 */
	private $mapOfNullsAndArraysOfCounts = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float|null>>|null
	 */
	private $mapOfArraysOfNullsAndCounts = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<int|float|null>|null>|null
	 */
	private $mapOfNullsAndArraysOfNullsAndCountsOrNull = null;

	/**
	 * @return int|float|null
	 */
	public function getCount()
	{
		return $this->count;
	}

	/**
	 * @param int|float $value
	 * @return JsonNumberTestBuilder<"OK", __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setCount($value)
	{
		$this->count = $value;
		/**
		 * @var JsonNumberTestBuilder<"OK", __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * This is a count.
	 * @return int|float|null
	 */
	public function getCountWithDescription()
	{
		return $this->countWithDescription;
	}

	/**
	 * This is a count.
	 * @param int|float $value
	 * @return JsonNumberTestBuilder<__Has_count__, "OK", __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setCountWithDescription($value)
	{
		$this->countWithDescription = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, "OK", __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return int|float|null
	 */
	public function getCountOrNull()
	{
		return $this->countOrNull;
	}

	/**
	 * @param int|float|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setCountOrNull($value)
	{
		$this->countOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<int|float>|null
	 */
	public function getArrayOfCounts()
	{
		return $this->arrayOfCounts;
	}

	/**
	 * @param list<int|float> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, "OK", __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfCounts($value)
	{
		$this->arrayOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, "OK", __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<list<int|float>>|null
	 */
	public function getArrayOfArraysOfCounts()
	{
		return $this->arrayOfArraysOfCounts;
	}

	/**
	 * @param list<list<int|float>> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, "OK", __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfArraysOfCounts($value)
	{
		$this->arrayOfArraysOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, "OK", __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<int|float|null>|null
	 */
	public function getArrayOfCountsAndNulls()
	{
		return $this->arrayOfCountsAndNulls;
	}

	/**
	 * @param list<int|float|null> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, "OK", __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfCountsAndNulls($value)
	{
		$this->arrayOfCountsAndNulls = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, "OK", __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<int|float>|null
	 */
	public function getArrayOfCountsOrNull()
	{
		return $this->arrayOfCountsOrNull;
	}

	/**
	 * @param list<int|float>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfCountsOrNull($value)
	{
		$this->arrayOfCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<int|float|null>|null
	 */
	public function getArrayOfCountsAndNullsOrNull()
	{
		return $this->arrayOfCountsAndNullsOrNull;
	}

	/**
	 * @param list<int|float|null>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfCountsAndNullsOrNull($value)
	{
		$this->arrayOfCountsAndNullsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<int|float>|null
	 */
	public function getMapOfCounts()
	{
		return $this->mapOfCounts;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<int|float> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, "OK", __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfCounts($value)
	{
		$this->mapOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, "OK", __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	public function getMapOfMapsOfCounts()
	{
		return $this->mapOfMapsOfCounts;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<int|float>> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, "OK", __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfMapsOfCounts($value)
	{
		$this->mapOfMapsOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, "OK", __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<int|float|null>|null
	 */
	public function getMapOfNullsAndCounts()
	{
		return $this->mapOfNullsAndCounts;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<int|float|null> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, "OK", __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfNullsAndCounts($value)
	{
		$this->mapOfNullsAndCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, "OK", __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<int|float>|null
	 */
	public function getMapOfCountsOrNull()
	{
		return $this->mapOfCountsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<int|float>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfCountsOrNull($value)
	{
		$this->mapOfCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<int|float|null>|null
	 */
	public function getMapOfNullsAndCountsOrNull()
	{
		return $this->mapOfNullsAndCountsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<int|float|null>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfNullsAndCountsOrNull($value)
	{
		$this->mapOfNullsAndCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	public function getArrayOfMapsOfCounts()
	{
		return $this->arrayOfMapsOfCounts;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<int|float>> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, "OK", __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfMapsOfCounts($value)
	{
		$this->arrayOfMapsOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, "OK", __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<int|float>>|null
	 */
	public function getArrayOfMapsOfCountsOrNull()
	{
		return $this->arrayOfMapsOfCountsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<int|float>>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfMapsOfCountsOrNull($value)
	{
		$this->arrayOfMapsOfCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<int|float>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfCounts()
	{
		return $this->arrayOfNullsAndMapsOfCounts;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<int|float>|null> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, "OK", __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfNullsAndMapsOfCounts($value)
	{
		$this->arrayOfNullsAndMapsOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, "OK", __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<int|float|null>>|null
	 */
	public function getArrayOfMapsOfNullsAndCounts()
	{
		return $this->arrayOfMapsOfNullsAndCounts;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<int|float|null>> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, "OK", __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfMapsOfNullsAndCounts($value)
	{
		$this->arrayOfMapsOfNullsAndCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, "OK", __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<int|float|null>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNullsAndCountsOrNull()
	{
		return $this->arrayOfNullsAndMapsOfNullsAndCountsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<int|float|null>|null>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setArrayOfNullsAndMapsOfNullsAndCountsOrNull($value)
	{
		$this->arrayOfNullsAndMapsOfNullsAndCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<int|float>>|null
	 */
	public function getMapOfArraysOfCounts()
	{
		return $this->mapOfArraysOfCounts;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<int|float>> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, "OK", __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfArraysOfCounts($value)
	{
		$this->mapOfArraysOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, "OK", __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<int|float>>|null
	 */
	public function getMapOfArraysOfCountsOrNull()
	{
		return $this->mapOfArraysOfCountsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<int|float>>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfArraysOfCountsOrNull($value)
	{
		$this->mapOfArraysOfCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<int|float>|null>|null
	 */
	public function getMapOfNullsAndArraysOfCounts()
	{
		return $this->mapOfNullsAndArraysOfCounts;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<int|float>|null> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, "OK", __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfNullsAndArraysOfCounts($value)
	{
		$this->mapOfNullsAndArraysOfCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, "OK", __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<int|float|null>>|null
	 */
	public function getMapOfArraysOfNullsAndCounts()
	{
		return $this->mapOfArraysOfNullsAndCounts;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<int|float|null>> $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, "OK">
	 */
	public function setMapOfArraysOfNullsAndCounts($value)
	{
		$this->mapOfArraysOfNullsAndCounts = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<int|float|null>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNullsAndCountsOrNull()
	{
		return $this->mapOfNullsAndArraysOfNullsAndCountsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<int|float|null>|null>|null $value
	 * @return JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__>
	 */
	public function setMapOfNullsAndArraysOfNullsAndCountsOrNull($value)
	{
		$this->mapOfNullsAndArraysOfNullsAndCountsOrNull = $value;
		/**
		 * @var JsonNumberTestBuilder<__Has_count__, __Has_countWithDescription__, __Has_arrayOfCounts__, __Has_arrayOfArraysOfCounts__, __Has_arrayOfCountsAndNulls__, __Has_mapOfCounts__, __Has_mapOfMapsOfCounts__, __Has_mapOfNullsAndCounts__, __Has_arrayOfMapsOfCounts__, __Has_arrayOfNullsAndMapsOfCounts__, __Has_arrayOfMapsOfNullsAndCounts__, __Has_mapOfArraysOfCounts__, __Has_mapOfNullsAndArraysOfCounts__, __Has_mapOfArraysOfNullsAndCounts__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberTest $value
	 * @return JsonNumberTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonNumberTestBuilder())
			->setCount($value->count)
			->setCountWithDescription($value->countWithDescription)
			->setCountOrNull($value->countOrNull)
			->setArrayOfCounts($value->arrayOfCounts)
			->setArrayOfArraysOfCounts($value->arrayOfArraysOfCounts)
			->setArrayOfCountsAndNulls($value->arrayOfCountsAndNulls)
			->setArrayOfCountsOrNull($value->arrayOfCountsOrNull)
			->setArrayOfCountsAndNullsOrNull($value->arrayOfCountsAndNullsOrNull)
			->setMapOfCounts($value->mapOfCounts)
			->setMapOfMapsOfCounts($value->mapOfMapsOfCounts)
			->setMapOfNullsAndCounts($value->mapOfNullsAndCounts)
			->setMapOfCountsOrNull($value->mapOfCountsOrNull)
			->setMapOfNullsAndCountsOrNull($value->mapOfNullsAndCountsOrNull)
			->setArrayOfMapsOfCounts($value->arrayOfMapsOfCounts)
			->setArrayOfMapsOfCountsOrNull($value->arrayOfMapsOfCountsOrNull)
			->setArrayOfNullsAndMapsOfCounts($value->arrayOfNullsAndMapsOfCounts)
			->setArrayOfMapsOfNullsAndCounts($value->arrayOfMapsOfNullsAndCounts)
			->setArrayOfNullsAndMapsOfNullsAndCountsOrNull($value->arrayOfNullsAndMapsOfNullsAndCountsOrNull)
			->setMapOfArraysOfCounts($value->mapOfArraysOfCounts)
			->setMapOfArraysOfCountsOrNull($value->mapOfArraysOfCountsOrNull)
			->setMapOfNullsAndArraysOfCounts($value->mapOfNullsAndArraysOfCounts)
			->setMapOfArraysOfNullsAndCounts($value->mapOfArraysOfNullsAndCounts)
			->setMapOfNullsAndArraysOfNullsAndCountsOrNull($value->mapOfNullsAndArraysOfNullsAndCountsOrNull);
	}
}