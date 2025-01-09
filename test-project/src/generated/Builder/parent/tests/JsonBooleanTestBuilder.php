<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests boolean values.
 * @template __Has_flag__
 * @template __Has_flagWithDescription__
 * @template __Has_arrayOfFlags__
 * @template __Has_arrayOfArraysOfFlags__
 * @template __Has_arrayOfFlagsAndNulls__
 * @template __Has_mapOfFlags__
 * @template __Has_mapOfMapsOfFlags__
 * @template __Has_mapOfNullsAndFlags__
 * @template __Has_arrayOfMapsOfFlags__
 * @template __Has_arrayOfNullsAndMapsOfFlags__
 * @template __Has_arrayOfMapsOfNullsAndFlags__
 * @template __Has_mapOfArraysOfFlags__
 * @template __Has_mapOfNullsAndArraysOfFlags__
 * @template __Has_mapOfArraysOfNullsAndFlags__
 */
final class JsonBooleanTestBuilder
{

	/**
	 * @var bool|null
	 */
	private $flag = null;

	/**
	 * This is a flag.
	 * @var bool|null
	 */
	private $flagWithDescription = null;

	/**
	 * @var bool|null
	 */
	private $flagOrNull = null;

	/**
	 * @var list<bool>|null
	 */
	private $arrayOfFlags = null;

	/**
	 * @var list<list<bool>>|null
	 */
	private $arrayOfArraysOfFlags = null;

	/**
	 * @var list<bool|null>|null
	 */
	private $arrayOfFlagsAndNulls = null;

	/**
	 * @var list<bool>|null
	 */
	private $arrayOfFlagsOrNull = null;

	/**
	 * @var list<bool|null>|null
	 */
	private $arrayOfFlagsAndNullsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<bool>|null
	 */
	private $mapOfFlags = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	private $mapOfMapsOfFlags = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<bool|null>|null
	 */
	private $mapOfNullsAndFlags = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<bool>|null
	 */
	private $mapOfFlagsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<bool|null>|null
	 */
	private $mapOfNullsAndFlagsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	private $arrayOfMapsOfFlags = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	private $arrayOfMapsOfFlagsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool>|null>|null
	 */
	private $arrayOfNullsAndMapsOfFlags = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool|null>>|null
	 */
	private $arrayOfMapsOfNullsAndFlags = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<bool|null>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNullsAndFlagsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool>>|null
	 */
	private $mapOfArraysOfFlags = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool>>|null
	 */
	private $mapOfArraysOfFlagsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool>|null>|null
	 */
	private $mapOfNullsAndArraysOfFlags = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool|null>>|null
	 */
	private $mapOfArraysOfNullsAndFlags = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<bool|null>|null>|null
	 */
	private $mapOfNullsAndArraysOfNullsAndFlagsOrNull = null;

	/**
	 * @return bool|null
	 */
	public function getFlag()
	{
		return $this->flag;
	}

	/**
	 * @param bool $value
	 * @return JsonBooleanTestBuilder<"OK", __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setFlag($value)
	{
		$this->flag = $value;
		/**
		 * @var JsonBooleanTestBuilder<"OK", __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * This is a flag.
	 * @return bool|null
	 */
	public function getFlagWithDescription()
	{
		return $this->flagWithDescription;
	}

	/**
	 * This is a flag.
	 * @param bool $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, "OK", __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setFlagWithDescription($value)
	{
		$this->flagWithDescription = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, "OK", __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return bool|null
	 */
	public function getFlagOrNull()
	{
		return $this->flagOrNull;
	}

	/**
	 * @param bool|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setFlagOrNull($value)
	{
		$this->flagOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<bool>|null
	 */
	public function getArrayOfFlags()
	{
		return $this->arrayOfFlags;
	}

	/**
	 * @param list<bool> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, "OK", __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfFlags($value)
	{
		$this->arrayOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, "OK", __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<list<bool>>|null
	 */
	public function getArrayOfArraysOfFlags()
	{
		return $this->arrayOfArraysOfFlags;
	}

	/**
	 * @param list<list<bool>> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, "OK", __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfArraysOfFlags($value)
	{
		$this->arrayOfArraysOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, "OK", __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<bool|null>|null
	 */
	public function getArrayOfFlagsAndNulls()
	{
		return $this->arrayOfFlagsAndNulls;
	}

	/**
	 * @param list<bool|null> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, "OK", __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfFlagsAndNulls($value)
	{
		$this->arrayOfFlagsAndNulls = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, "OK", __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<bool>|null
	 */
	public function getArrayOfFlagsOrNull()
	{
		return $this->arrayOfFlagsOrNull;
	}

	/**
	 * @param list<bool>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfFlagsOrNull($value)
	{
		$this->arrayOfFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<bool|null>|null
	 */
	public function getArrayOfFlagsAndNullsOrNull()
	{
		return $this->arrayOfFlagsAndNullsOrNull;
	}

	/**
	 * @param list<bool|null>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfFlagsAndNullsOrNull($value)
	{
		$this->arrayOfFlagsAndNullsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<bool>|null
	 */
	public function getMapOfFlags()
	{
		return $this->mapOfFlags;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<bool> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, "OK", __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfFlags($value)
	{
		$this->mapOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, "OK", __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	public function getMapOfMapsOfFlags()
	{
		return $this->mapOfMapsOfFlags;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<bool>> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, "OK", __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfMapsOfFlags($value)
	{
		$this->mapOfMapsOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, "OK", __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<bool|null>|null
	 */
	public function getMapOfNullsAndFlags()
	{
		return $this->mapOfNullsAndFlags;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<bool|null> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, "OK", __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfNullsAndFlags($value)
	{
		$this->mapOfNullsAndFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, "OK", __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<bool>|null
	 */
	public function getMapOfFlagsOrNull()
	{
		return $this->mapOfFlagsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<bool>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfFlagsOrNull($value)
	{
		$this->mapOfFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<bool|null>|null
	 */
	public function getMapOfNullsAndFlagsOrNull()
	{
		return $this->mapOfNullsAndFlagsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<bool|null>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfNullsAndFlagsOrNull($value)
	{
		$this->mapOfNullsAndFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	public function getArrayOfMapsOfFlags()
	{
		return $this->arrayOfMapsOfFlags;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<bool>> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, "OK", __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfMapsOfFlags($value)
	{
		$this->arrayOfMapsOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, "OK", __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<bool>>|null
	 */
	public function getArrayOfMapsOfFlagsOrNull()
	{
		return $this->arrayOfMapsOfFlagsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<bool>>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfMapsOfFlagsOrNull($value)
	{
		$this->arrayOfMapsOfFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<bool>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfFlags()
	{
		return $this->arrayOfNullsAndMapsOfFlags;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<bool>|null> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, "OK", __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfNullsAndMapsOfFlags($value)
	{
		$this->arrayOfNullsAndMapsOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, "OK", __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<bool|null>>|null
	 */
	public function getArrayOfMapsOfNullsAndFlags()
	{
		return $this->arrayOfMapsOfNullsAndFlags;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<bool|null>> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, "OK", __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfMapsOfNullsAndFlags($value)
	{
		$this->arrayOfMapsOfNullsAndFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, "OK", __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<bool|null>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNullsAndFlagsOrNull()
	{
		return $this->arrayOfNullsAndMapsOfNullsAndFlagsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<bool|null>|null>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setArrayOfNullsAndMapsOfNullsAndFlagsOrNull($value)
	{
		$this->arrayOfNullsAndMapsOfNullsAndFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<bool>>|null
	 */
	public function getMapOfArraysOfFlags()
	{
		return $this->mapOfArraysOfFlags;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<bool>> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, "OK", __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfArraysOfFlags($value)
	{
		$this->mapOfArraysOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, "OK", __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<bool>>|null
	 */
	public function getMapOfArraysOfFlagsOrNull()
	{
		return $this->mapOfArraysOfFlagsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<bool>>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfArraysOfFlagsOrNull($value)
	{
		$this->mapOfArraysOfFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<bool>|null>|null
	 */
	public function getMapOfNullsAndArraysOfFlags()
	{
		return $this->mapOfNullsAndArraysOfFlags;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<bool>|null> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, "OK", __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfNullsAndArraysOfFlags($value)
	{
		$this->mapOfNullsAndArraysOfFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, "OK", __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<bool|null>>|null
	 */
	public function getMapOfArraysOfNullsAndFlags()
	{
		return $this->mapOfArraysOfNullsAndFlags;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<bool|null>> $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, "OK">
	 */
	public function setMapOfArraysOfNullsAndFlags($value)
	{
		$this->mapOfArraysOfNullsAndFlags = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<bool|null>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNullsAndFlagsOrNull()
	{
		return $this->mapOfNullsAndArraysOfNullsAndFlagsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<bool|null>|null>|null $value
	 * @return JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__>
	 */
	public function setMapOfNullsAndArraysOfNullsAndFlagsOrNull($value)
	{
		$this->mapOfNullsAndArraysOfNullsAndFlagsOrNull = $value;
		/**
		 * @var JsonBooleanTestBuilder<__Has_flag__, __Has_flagWithDescription__, __Has_arrayOfFlags__, __Has_arrayOfArraysOfFlags__, __Has_arrayOfFlagsAndNulls__, __Has_mapOfFlags__, __Has_mapOfMapsOfFlags__, __Has_mapOfNullsAndFlags__, __Has_arrayOfMapsOfFlags__, __Has_arrayOfNullsAndMapsOfFlags__, __Has_arrayOfMapsOfNullsAndFlags__, __Has_mapOfArraysOfFlags__, __Has_mapOfNullsAndArraysOfFlags__, __Has_mapOfArraysOfNullsAndFlags__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonBooleanTest $value
	 * @return JsonBooleanTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonBooleanTestBuilder())
			->setFlag($value->flag)
			->setFlagWithDescription($value->flagWithDescription)
			->setFlagOrNull($value->flagOrNull)
			->setArrayOfFlags($value->arrayOfFlags)
			->setArrayOfArraysOfFlags($value->arrayOfArraysOfFlags)
			->setArrayOfFlagsAndNulls($value->arrayOfFlagsAndNulls)
			->setArrayOfFlagsOrNull($value->arrayOfFlagsOrNull)
			->setArrayOfFlagsAndNullsOrNull($value->arrayOfFlagsAndNullsOrNull)
			->setMapOfFlags($value->mapOfFlags)
			->setMapOfMapsOfFlags($value->mapOfMapsOfFlags)
			->setMapOfNullsAndFlags($value->mapOfNullsAndFlags)
			->setMapOfFlagsOrNull($value->mapOfFlagsOrNull)
			->setMapOfNullsAndFlagsOrNull($value->mapOfNullsAndFlagsOrNull)
			->setArrayOfMapsOfFlags($value->arrayOfMapsOfFlags)
			->setArrayOfMapsOfFlagsOrNull($value->arrayOfMapsOfFlagsOrNull)
			->setArrayOfNullsAndMapsOfFlags($value->arrayOfNullsAndMapsOfFlags)
			->setArrayOfMapsOfNullsAndFlags($value->arrayOfMapsOfNullsAndFlags)
			->setArrayOfNullsAndMapsOfNullsAndFlagsOrNull($value->arrayOfNullsAndMapsOfNullsAndFlagsOrNull)
			->setMapOfArraysOfFlags($value->mapOfArraysOfFlags)
			->setMapOfArraysOfFlagsOrNull($value->mapOfArraysOfFlagsOrNull)
			->setMapOfNullsAndArraysOfFlags($value->mapOfNullsAndArraysOfFlags)
			->setMapOfArraysOfNullsAndFlags($value->mapOfArraysOfNullsAndFlags)
			->setMapOfNullsAndArraysOfNullsAndFlagsOrNull($value->mapOfNullsAndArraysOfNullsAndFlagsOrNull);
	}
}