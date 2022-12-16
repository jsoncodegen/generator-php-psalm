<?php

namespace JCG\Test\generated\Builder\parent\tests;

/**
 * This tests number enum value fields.
 * @template __Has_enumValue__
 * @template __Has_enumValueWithDescription__
 * @template __Has_enumValueOrNull__
 * @template __Has_arrayOfEnumValues__
 * @template __Has_arrayOfArraysOfEnumValues__
 * @template __Has_arrayOfEnumValuesAndNulls__
 * @template __Has_arrayOfEnumValuesOrNull__
 * @template __Has_arrayOfEnumValuesAndNullsOrNull__
 * @template __Has_mapOfEnumValues__
 * @template __Has_mapOfMapsOfEnumValues__
 * @template __Has_mapOfNullsAndEnumValues__
 * @template __Has_mapOfEnumValuesOrNull__
 * @template __Has_mapOfNullsAndEnumValuesOrNull__
 * @template __Has_arrayOfMapsOfEnumValues__
 * @template __Has_arrayOfMapsOfEnumValuesOrNull__
 * @template __Has_arrayOfNullsAndMapsOfEnumValues__
 * @template __Has_arrayOfMapsOfNullsAndEnumValues__
 * @template __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__
 * @template __Has_mapOfArraysOfEnumValues__
 * @template __Has_mapOfArraysOfEnumValuesOrNull__
 * @template __Has_mapOfNullsAndArraysOfEnumValues__
 * @template __Has_mapOfArraysOfNullsAndEnumValues__
 * @template __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__
 */
final class JsonNumberEnumValueLocalTestBuilder
{

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	private $enumValue = null;

	/**
	 * This is an enum value.
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	private $enumValueWithDescription = null;

	/**
	 * @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	private $enumValueOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	private $arrayOfEnumValues = null;

	/**
	 * @var list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	private $arrayOfArraysOfEnumValues = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	private $arrayOfEnumValuesAndNulls = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	private $arrayOfEnumValuesOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	private $arrayOfEnumValuesAndNullsOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	private $mapOfEnumValues = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	private $mapOfMapsOfEnumValues = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	private $mapOfNullsAndEnumValues = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	private $mapOfEnumValuesOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	private $mapOfNullsAndEnumValuesOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	private $arrayOfMapsOfEnumValues = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	private $arrayOfMapsOfEnumValuesOrNull = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null>|null
	 */
	private $arrayOfNullsAndMapsOfEnumValues = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>>|null
	 */
	private $arrayOfMapsOfNullsAndEnumValues = null;

	/**
	 * @var list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null>|null
	 */
	private $arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	private $mapOfArraysOfEnumValues = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	private $mapOfArraysOfEnumValuesOrNull = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null>|null
	 */
	private $mapOfNullsAndArraysOfEnumValues = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>>|null
	 */
	private $mapOfArraysOfNullsAndEnumValues = null;

	/**
	 * @var \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null>|null
	 */
	private $mapOfNullsAndArraysOfNullsAndEnumValuesOrNull = null;

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	public function getEnumValue()
	{
		return $this->enumValue;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueLocalTestBuilder<"OK", __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setEnumValue($value)
	{
		$this->enumValue = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<"OK", __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * This is an enum value.
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	public function getEnumValueWithDescription()
	{
		return $this->enumValueWithDescription;
	}

	/**
	 * This is an enum value.
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, "OK", __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setEnumValueWithDescription($value)
	{
		$this->enumValueWithDescription = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, "OK", __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null
	 */
	public function getEnumValueOrNull()
	{
		return $this->enumValueOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, "OK", __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setEnumValueOrNull($value)
	{
		$this->enumValueOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, "OK", __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	public function getArrayOfEnumValues()
	{
		return $this->arrayOfEnumValues;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, "OK", __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfEnumValues($value)
	{
		$this->arrayOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, "OK", __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	public function getArrayOfArraysOfEnumValues()
	{
		return $this->arrayOfArraysOfEnumValues;
	}

	/**
	 * @param list<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, "OK", __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfArraysOfEnumValues($value)
	{
		$this->arrayOfArraysOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, "OK", __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	public function getArrayOfEnumValuesAndNulls()
	{
		return $this->arrayOfEnumValuesAndNulls;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, "OK", __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfEnumValuesAndNulls($value)
	{
		$this->arrayOfEnumValuesAndNulls = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, "OK", __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	public function getArrayOfEnumValuesOrNull()
	{
		return $this->arrayOfEnumValuesOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, "OK", __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfEnumValuesOrNull($value)
	{
		$this->arrayOfEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, "OK", __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	public function getArrayOfEnumValuesAndNullsOrNull()
	{
		return $this->arrayOfEnumValuesAndNullsOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, "OK", __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfEnumValuesAndNullsOrNull($value)
	{
		$this->arrayOfEnumValuesAndNullsOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, "OK", __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	public function getMapOfEnumValues()
	{
		return $this->mapOfEnumValues;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, "OK", __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfEnumValues($value)
	{
		$this->mapOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, "OK", __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	public function getMapOfMapsOfEnumValues()
	{
		return $this->mapOfMapsOfEnumValues;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, "OK", __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfMapsOfEnumValues($value)
	{
		$this->mapOfMapsOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, "OK", __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	public function getMapOfNullsAndEnumValues()
	{
		return $this->mapOfNullsAndEnumValues;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, "OK", __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfNullsAndEnumValues($value)
	{
		$this->mapOfNullsAndEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, "OK", __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null
	 */
	public function getMapOfEnumValuesOrNull()
	{
		return $this->mapOfEnumValuesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, "OK", __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfEnumValuesOrNull($value)
	{
		$this->mapOfEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, "OK", __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null
	 */
	public function getMapOfNullsAndEnumValuesOrNull()
	{
		return $this->mapOfNullsAndEnumValuesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, "OK", __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfNullsAndEnumValuesOrNull($value)
	{
		$this->mapOfNullsAndEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, "OK", __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	public function getArrayOfMapsOfEnumValues()
	{
		return $this->arrayOfMapsOfEnumValues;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, "OK", __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfMapsOfEnumValues($value)
	{
		$this->arrayOfMapsOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, "OK", __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	public function getArrayOfMapsOfEnumValuesOrNull()
	{
		return $this->arrayOfMapsOfEnumValuesOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, "OK", __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfMapsOfEnumValuesOrNull($value)
	{
		$this->arrayOfMapsOfEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, "OK", __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfEnumValues()
	{
		return $this->arrayOfNullsAndMapsOfEnumValues;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, "OK", __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfNullsAndMapsOfEnumValues($value)
	{
		$this->arrayOfNullsAndMapsOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, "OK", __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>>|null
	 */
	public function getArrayOfMapsOfNullsAndEnumValues()
	{
		return $this->arrayOfMapsOfNullsAndEnumValues;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, "OK", __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfMapsOfNullsAndEnumValues($value)
	{
		$this->arrayOfMapsOfNullsAndEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, "OK", __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null>|null
	 */
	public function getArrayOfNullsAndMapsOfNullsAndEnumValuesOrNull()
	{
		return $this->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull;
	}

	/**
	 * @param list<\JCG\Test\generated\Util\JsonMap<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, "OK", __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setArrayOfNullsAndMapsOfNullsAndEnumValuesOrNull($value)
	{
		$this->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, "OK", __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	public function getMapOfArraysOfEnumValues()
	{
		return $this->mapOfArraysOfEnumValues;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, "OK", __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfArraysOfEnumValues($value)
	{
		$this->mapOfArraysOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, "OK", __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null
	 */
	public function getMapOfArraysOfEnumValuesOrNull()
	{
		return $this->mapOfArraysOfEnumValuesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, "OK", __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfArraysOfEnumValuesOrNull($value)
	{
		$this->mapOfArraysOfEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, "OK", __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null>|null
	 */
	public function getMapOfNullsAndArraysOfEnumValues()
	{
		return $this->mapOfNullsAndArraysOfEnumValues;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name>|null> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, "OK", __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfNullsAndArraysOfEnumValues($value)
	{
		$this->mapOfNullsAndArraysOfEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, "OK", __Has_mapOfArraysOfNullsAndEnumValues__, __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>>|null
	 */
	public function getMapOfArraysOfNullsAndEnumValues()
	{
		return $this->mapOfArraysOfNullsAndEnumValues;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>> $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, "OK", __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__>
	 */
	public function setMapOfArraysOfNullsAndEnumValues($value)
	{
		$this->mapOfArraysOfNullsAndEnumValues = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, "OK", __Has_mapOfNullsAndArraysOfNullsAndEnumValuesOrNull__> $that
		 */
		$that = $this;
		return $that;
	}

	/**
	 * @return \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null>|null
	 */
	public function getMapOfNullsAndArraysOfNullsAndEnumValuesOrNull()
	{
		return $this->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull;
	}

	/**
	 * @param \JCG\Test\generated\Util\JsonMap<list<\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name|null>|null>|null $value
	 * @return JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, "OK">
	 */
	public function setMapOfNullsAndArraysOfNullsAndEnumValuesOrNull($value)
	{
		$this->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull = $value;
		/**
		 * @var JsonNumberEnumValueLocalTestBuilder<__Has_enumValue__, __Has_enumValueWithDescription__, __Has_enumValueOrNull__, __Has_arrayOfEnumValues__, __Has_arrayOfArraysOfEnumValues__, __Has_arrayOfEnumValuesAndNulls__, __Has_arrayOfEnumValuesOrNull__, __Has_arrayOfEnumValuesAndNullsOrNull__, __Has_mapOfEnumValues__, __Has_mapOfMapsOfEnumValues__, __Has_mapOfNullsAndEnumValues__, __Has_mapOfEnumValuesOrNull__, __Has_mapOfNullsAndEnumValuesOrNull__, __Has_arrayOfMapsOfEnumValues__, __Has_arrayOfMapsOfEnumValuesOrNull__, __Has_arrayOfNullsAndMapsOfEnumValues__, __Has_arrayOfMapsOfNullsAndEnumValues__, __Has_arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull__, __Has_mapOfArraysOfEnumValues__, __Has_mapOfArraysOfEnumValuesOrNull__, __Has_mapOfNullsAndArraysOfEnumValues__, __Has_mapOfArraysOfNullsAndEnumValues__, "OK"> $that
		 */
		$that = $this;
		return $that;
	}
}