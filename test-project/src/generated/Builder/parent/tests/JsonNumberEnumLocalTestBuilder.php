<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests number enum fields.
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
final class JsonNumberEnumLocalTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	private $enum_ = null;

	/**
	 * This is an enum.
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	private $enumWithDescription = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	private $enumOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	private $arrayOfEnums = null;

	/**
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	private $arrayOfArraysOfEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	private $arrayOfEnumsAndNulls = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	private $arrayOfEnumsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	private $arrayOfEnumsAndNullsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	private $mapOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	private $mapOfMapsOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	private $mapOfNullsAndEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	private $mapOfEnumsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	private $mapOfNullsAndEnumsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	private $arrayOfMapsOfEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	private $arrayOfMapsOfEnumsOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null>|null
	 */
	private $arrayOfNullsAndMapsOfEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>>|null
	 */
	private $arrayOfMapsOfNullsAndEnums = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNullsAndEnumsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	private $mapOfArraysOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	private $mapOfArraysOfEnumsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null>|null
	 */
	private $mapOfNullsAndArraysOfEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>>|null
	 */
	private $mapOfArraysOfNullsAndEnums = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null
	 */
	private $mapOfNullsAndArraysOfNullsAndEnumsOrNull = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	public function getEnum_()
	{
		return $this->enum_;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue $value
	 * @return JsonNumberEnumLocalTestBuilder<"OK", __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setEnum_($value)
	{
		$this->enum_ = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<"OK", __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * This is an enum.
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	public function getEnumWithDescription()
	{
		return $this->enumWithDescription;
	}

	/**
	 * This is an enum.
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, "OK", __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setEnumWithDescription($value)
	{
		$this->enumWithDescription = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, "OK", __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null
	 */
	public function getEnumOrNull()
	{
		return $this->enumOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setEnumOrNull($value)
	{
		$this->enumOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	public function getArrayOfEnums()
	{
		return $this->arrayOfEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, "OK", __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnums($value)
	{
		$this->arrayOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, "OK", __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public function getArrayOfArraysOfEnums()
	{
		return $this->arrayOfArraysOfEnums;
	}

	/**
	 * @param list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, "OK", __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfArraysOfEnums($value)
	{
		$this->arrayOfArraysOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, "OK", __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	public function getArrayOfEnumsAndNulls()
	{
		return $this->arrayOfEnumsAndNulls;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, "OK", __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnumsAndNulls($value)
	{
		$this->arrayOfEnumsAndNulls = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, "OK", __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	public function getArrayOfEnumsOrNull()
	{
		return $this->arrayOfEnumsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnumsOrNull($value)
	{
		$this->arrayOfEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	public function getArrayOfEnumsAndNullsOrNull()
	{
		return $this->arrayOfEnumsAndNullsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfEnumsAndNullsOrNull($value)
	{
		$this->arrayOfEnumsAndNullsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	public function getMapOfEnums()
	{
		return $this->mapOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, "OK", __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfEnums($value)
	{
		$this->mapOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, "OK", __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public function getMapOfMapsOfEnums()
	{
		return $this->mapOfMapsOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, "OK", __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfMapsOfEnums($value)
	{
		$this->mapOfMapsOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, "OK", __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	public function getMapOfNullsAndEnums()
	{
		return $this->mapOfNullsAndEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndEnums($value)
	{
		$this->mapOfNullsAndEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null
	 */
	public function getMapOfEnumsOrNull()
	{
		return $this->mapOfEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfEnumsOrNull($value)
	{
		$this->mapOfEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null
	 */
	public function getMapOfNullsAndEnumsOrNull()
	{
		return $this->mapOfNullsAndEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndEnumsOrNull($value)
	{
		$this->mapOfNullsAndEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public function getArrayOfMapsOfEnums()
	{
		return $this->arrayOfMapsOfEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, "OK", __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfMapsOfEnums($value)
	{
		$this->arrayOfMapsOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, "OK", __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public function getArrayOfMapsOfEnumsOrNull()
	{
		return $this->arrayOfMapsOfEnumsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfMapsOfEnumsOrNull($value)
	{
		$this->arrayOfMapsOfEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfEnums()
	{
		return $this->arrayOfNullsAndMapsOfEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfNullsAndMapsOfEnums($value)
	{
		$this->arrayOfNullsAndMapsOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, "OK", __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>>|null
	 */
	public function getArrayOfMapsOfNullsAndEnums()
	{
		return $this->arrayOfMapsOfNullsAndEnums;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, "OK", __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfMapsOfNullsAndEnums($value)
	{
		$this->arrayOfMapsOfNullsAndEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, "OK", __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNullsAndEnumsOrNull()
	{
		return $this->arrayOfNullsAndMapsOfNullsAndEnumsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setArrayOfNullsAndMapsOfNullsAndEnumsOrNull($value)
	{
		$this->arrayOfNullsAndMapsOfNullsAndEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public function getMapOfArraysOfEnums()
	{
		return $this->mapOfArraysOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, "OK", __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfArraysOfEnums($value)
	{
		$this->mapOfArraysOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, "OK", __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null
	 */
	public function getMapOfArraysOfEnumsOrNull()
	{
		return $this->mapOfArraysOfEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfArraysOfEnumsOrNull($value)
	{
		$this->mapOfArraysOfEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null>|null
	 */
	public function getMapOfNullsAndArraysOfEnums()
	{
		return $this->mapOfNullsAndArraysOfEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue>|null> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, "OK", __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndArraysOfEnums($value)
	{
		$this->mapOfNullsAndArraysOfEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, "OK", __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>>|null
	 */
	public function getMapOfArraysOfNullsAndEnums()
	{
		return $this->mapOfArraysOfNullsAndEnums;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>> $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, "OK">
	 */
	public function setMapOfArraysOfNullsAndEnums($value)
	{
		$this->mapOfArraysOfNullsAndEnums = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNullsAndEnumsOrNull()
	{
		return $this->mapOfNullsAndArraysOfNullsAndEnumsOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::NameOfFractionValue|null>|null>|null $value
	 * @return JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__>
	 */
	public function setMapOfNullsAndArraysOfNullsAndEnumsOrNull($value)
	{
		$this->mapOfNullsAndArraysOfNullsAndEnumsOrNull = $value;
		/**
		 * @var JsonNumberEnumLocalTestBuilder<__Has_enum___, __Has_enumWithDescription__, __Has_arrayOfEnums__, __Has_arrayOfArraysOfEnums__, __Has_arrayOfEnumsAndNulls__, __Has_mapOfEnums__, __Has_mapOfMapsOfEnums__, __Has_mapOfNullsAndEnums__, __Has_arrayOfMapsOfEnums__, __Has_arrayOfNullsAndMapsOfEnums__, __Has_arrayOfMapsOfNullsAndEnums__, __Has_mapOfArraysOfEnums__, __Has_mapOfNullsAndArraysOfEnums__, __Has_mapOfArraysOfNullsAndEnums__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnumLocalTest $value
	 * @return JsonNumberEnumLocalTestBuilder<"OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK", "OK">
	 */
	public static function from($value)
	{
		return (new JsonNumberEnumLocalTestBuilder())
			->setEnum_($value->enum_)
			->setEnumWithDescription($value->enumWithDescription)
			->setEnumOrNull($value->enumOrNull)
			->setArrayOfEnums($value->arrayOfEnums)
			->setArrayOfArraysOfEnums($value->arrayOfArraysOfEnums)
			->setArrayOfEnumsAndNulls($value->arrayOfEnumsAndNulls)
			->setArrayOfEnumsOrNull($value->arrayOfEnumsOrNull)
			->setArrayOfEnumsAndNullsOrNull($value->arrayOfEnumsAndNullsOrNull)
			->setMapOfEnums($value->mapOfEnums)
			->setMapOfMapsOfEnums($value->mapOfMapsOfEnums)
			->setMapOfNullsAndEnums($value->mapOfNullsAndEnums)
			->setMapOfEnumsOrNull($value->mapOfEnumsOrNull)
			->setMapOfNullsAndEnumsOrNull($value->mapOfNullsAndEnumsOrNull)
			->setArrayOfMapsOfEnums($value->arrayOfMapsOfEnums)
			->setArrayOfMapsOfEnumsOrNull($value->arrayOfMapsOfEnumsOrNull)
			->setArrayOfNullsAndMapsOfEnums($value->arrayOfNullsAndMapsOfEnums)
			->setArrayOfMapsOfNullsAndEnums($value->arrayOfMapsOfNullsAndEnums)
			->setArrayOfNullsAndMapsOfNullsAndEnumsOrNull($value->arrayOfNullsAndMapsOfNullsAndEnumsOrNull)
			->setMapOfArraysOfEnums($value->mapOfArraysOfEnums)
			->setMapOfArraysOfEnumsOrNull($value->mapOfArraysOfEnumsOrNull)
			->setMapOfNullsAndArraysOfEnums($value->mapOfNullsAndArraysOfEnums)
			->setMapOfArraysOfNullsAndEnums($value->mapOfArraysOfNullsAndEnums)
			->setMapOfNullsAndArraysOfNullsAndEnumsOrNull($value->mapOfNullsAndArraysOfNullsAndEnumsOrNull);
	}
}