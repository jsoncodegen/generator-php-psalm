<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests string enum fields.
 * @template __Has_enum___
 * @template __Has_enumWithDescription__
 * @template __Has_arrayOfEnums__
 * @template __Has_arrayOfArraysOfEnums__
 * @template __Has_arrayOfEnumsAndNulls__
 * @template __Has_mapOfEnums__
 * @template __Has_mapOfMapsOfEnums__
 * @template __Has_mapOfNullsAndEnums__
 * @template __Has_arrayOfMapsOfEnums__
 * @template __Has_arrayOfNullsAndMapsOfEnums__
 * @template __Has_arrayOfMapsOfNullsAndEnums__
 * @template __Has_mapOfArraysOfEnums__
 * @template __Has_mapOfNullsAndArraysOfEnums__
 * @template __Has_mapOfArraysOfNullsAndEnums__
 */
final class JsonStringEnumLocalTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $enum_ = null;

	/**
	 * This is an enum.
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $enumWithDescription = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	private $enumOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	private $arrayOfEnums = null;

	/**
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	private $arrayOfArraysOfEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	private $arrayOfEnumsAndNulls = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	private $arrayOfEnumsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	private $arrayOfEnumsAndNullsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	private $mapOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	private $mapOfMapsOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	private $mapOfNullsAndEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	private $mapOfEnumsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	private $mapOfNullsAndEnumsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	private $arrayOfMapsOfEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	private $arrayOfMapsOfEnumsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null>|null
	 */
	private $arrayOfNullsAndMapsOfEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>>|null
	 */
	private $arrayOfMapsOfNullsAndEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNullsAndEnumsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	private $mapOfArraysOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	private $mapOfArraysOfEnumsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null>|null
	 */
	private $mapOfNullsAndArraysOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>>|null
	 */
	private $mapOfArraysOfNullsAndEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null>|null
	 */
	private $mapOfNullsAndArraysOfNullsAndEnumsOrNull = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getEnum_()
	{
		return $this->enum_;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumLocalTestBuilder<"OK", __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setEnum_($value)
	{
		$this->enum_ = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<"OK", __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * This is an enum.
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getEnumWithDescription()
	{
		return $this->enumWithDescription;
	}

	/**
	 * This is an enum.
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, "OK", __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setEnumWithDescription($value)
	{
		$this->enumWithDescription = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, "OK", __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null
	 */
	public function getEnumOrNull()
	{
		return $this->enumOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setEnumOrNull($value)
	{
		$this->enumOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	public function getArrayOfEnums()
	{
		return $this->arrayOfEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, "OK", __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnums($value)
	{
		$this->arrayOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, "OK", __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public function getArrayOfArraysOfEnums()
	{
		return $this->arrayOfArraysOfEnums;
	}

	/**
	 * @param list<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, "OK", __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfArraysOfEnums($value)
	{
		$this->arrayOfArraysOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, "OK", __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	public function getArrayOfEnumsAndNulls()
	{
		return $this->arrayOfEnumsAndNulls;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, "OK", __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnumsAndNulls($value)
	{
		$this->arrayOfEnumsAndNulls = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, "OK", __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	public function getArrayOfEnumsOrNull()
	{
		return $this->arrayOfEnumsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnumsOrNull($value)
	{
		$this->arrayOfEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	public function getArrayOfEnumsAndNullsOrNull()
	{
		return $this->arrayOfEnumsAndNullsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnumsAndNullsOrNull($value)
	{
		$this->arrayOfEnumsAndNullsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	public function getMapOfEnums()
	{
		return $this->mapOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, "OK", __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfEnums($value)
	{
		$this->mapOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, "OK", __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public function getMapOfMapsOfEnums()
	{
		return $this->mapOfMapsOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, "OK", __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfMapsOfEnums($value)
	{
		$this->mapOfMapsOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, "OK", __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	public function getMapOfNullsAndEnums()
	{
		return $this->mapOfNullsAndEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndEnums($value)
	{
		$this->mapOfNullsAndEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null
	 */
	public function getMapOfEnumsOrNull()
	{
		return $this->mapOfEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfEnumsOrNull($value)
	{
		$this->mapOfEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null
	 */
	public function getMapOfNullsAndEnumsOrNull()
	{
		return $this->mapOfNullsAndEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndEnumsOrNull($value)
	{
		$this->mapOfNullsAndEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public function getArrayOfMapsOfEnums()
	{
		return $this->arrayOfMapsOfEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, "OK", __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfMapsOfEnums($value)
	{
		$this->arrayOfMapsOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, "OK", __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public function getArrayOfMapsOfEnumsOrNull()
	{
		return $this->arrayOfMapsOfEnumsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfMapsOfEnumsOrNull($value)
	{
		$this->arrayOfMapsOfEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfEnums()
	{
		return $this->arrayOfNullsAndMapsOfEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfNullsAndMapsOfEnums($value)
	{
		$this->arrayOfNullsAndMapsOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>>|null
	 */
	public function getArrayOfMapsOfNullsAndEnums()
	{
		return $this->arrayOfMapsOfNullsAndEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, "OK", __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfMapsOfNullsAndEnums($value)
	{
		$this->arrayOfMapsOfNullsAndEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, "OK", __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNullsAndEnumsOrNull()
	{
		return $this->arrayOfNullsAndMapsOfNullsAndEnumsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfNullsAndMapsOfNullsAndEnumsOrNull($value)
	{
		$this->arrayOfNullsAndMapsOfNullsAndEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public function getMapOfArraysOfEnums()
	{
		return $this->mapOfArraysOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, "OK", __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfArraysOfEnums($value)
	{
		$this->mapOfArraysOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, "OK", __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null
	 */
	public function getMapOfArraysOfEnumsOrNull()
	{
		return $this->mapOfArraysOfEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfArraysOfEnumsOrNull($value)
	{
		$this->mapOfArraysOfEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null>|null
	 */
	public function getMapOfNullsAndArraysOfEnums()
	{
		return $this->mapOfNullsAndArraysOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue>|null> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, "OK", __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndArraysOfEnums($value)
	{
		$this->mapOfNullsAndArraysOfEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, "OK", __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>>|null
	 */
	public function getMapOfArraysOfNullsAndEnums()
	{
		return $this->mapOfArraysOfNullsAndEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>> $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, "OK">
	 */
	public function setMapOfArraysOfNullsAndEnums($value)
	{
		$this->mapOfArraysOfNullsAndEnums = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNullsAndEnumsOrNull()
	{
		return $this->mapOfNullsAndArraysOfNullsAndEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonStringEnum::NameOfEmptyValue|null>|null>|null $value
	 * @return JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndArraysOfNullsAndEnumsOrNull($value)
	{
		$this->mapOfNullsAndArraysOfNullsAndEnumsOrNull = $value;
		/**
		 * @var JsonStringEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}
}