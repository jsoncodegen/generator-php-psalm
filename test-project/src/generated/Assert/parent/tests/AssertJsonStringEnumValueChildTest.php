<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringEnumValueChildTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueChildTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueChildTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueChildTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueChildTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueChildTest, got $type (at $path)"
			);
		}
		\JCG\Test\generated\Util\AssertUtil::assertFieldsIn($o, ["enumValue","enumValueWithDescription","enumValueOrNull","arrayOfEnumValues","arrayOfArraysOfEnumValues","arrayOfEnumValuesAndNulls","arrayOfEnumValuesOrNull","arrayOfEnumValuesAndNullsOrNull","mapOfEnumValues","mapOfMapsOfEnumValues","mapOfNullsAndEnumValues","mapOfEnumValuesOrNull","mapOfNullsAndEnumValuesOrNull","arrayOfMapsOfEnumValues","arrayOfMapsOfEnumValuesOrNull","arrayOfNullsAndMapsOfEnumValues","arrayOfMapsOfNullsAndEnumValues","arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull","mapOfArraysOfEnumValues","mapOfArraysOfEnumValuesOrNull","mapOfNullsAndArraysOfEnumValues","mapOfArraysOfNullsAndEnumValues","mapOfNullsAndArraysOfNullsAndEnumValuesOrNull"], $path);
		$o->enumValue = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
			(isset($o->enumValue) ? $o->enumValue : null),
			false,
			$path . '->enumValue:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonStringEnum:Name'
		);
		$o->enumValueWithDescription = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
			(isset($o->enumValueWithDescription) ? $o->enumValueWithDescription : null),
			false,
			$path . '->enumValueWithDescription:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonStringEnum:Name'
		);
		$o->enumValueOrNull = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
			(isset($o->enumValueOrNull) ? $o->enumValueOrNull : null),
			true,
			$path . '->enumValueOrNull:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonStringEnum:Name'
		);
		$o->arrayOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfEnumValues) ? $o->arrayOfEnumValues : null),
			false,
			$path . '->arrayOfEnumValues'
		);
		$o->arrayOfArraysOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertArray(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfArraysOfEnumValues) ? $o->arrayOfArraysOfEnumValues : null),
			false,
			$path . '->arrayOfArraysOfEnumValues'
		);
		$o->arrayOfEnumValuesAndNulls = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfEnumValuesAndNulls) ? $o->arrayOfEnumValuesAndNulls : null),
			false,
			$path . '->arrayOfEnumValuesAndNulls'
		);
		$o->arrayOfEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfEnumValuesOrNull) ? $o->arrayOfEnumValuesOrNull : null),
			true,
			$path . '->arrayOfEnumValuesOrNull'
		);
		$o->arrayOfEnumValuesAndNullsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfEnumValuesAndNullsOrNull) ? $o->arrayOfEnumValuesAndNullsOrNull : null),
			true,
			$path . '->arrayOfEnumValuesAndNullsOrNull'
		);
		$o->mapOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfEnumValues) ? $o->mapOfEnumValues : null),
			false,
			$path . '->mapOfEnumValues'
		);
		$o->mapOfMapsOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertMap(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfMapsOfEnumValues) ? $o->mapOfMapsOfEnumValues : null),
			false,
			$path . '->mapOfMapsOfEnumValues'
		);
		$o->mapOfNullsAndEnumValues = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndEnumValues) ? $o->mapOfNullsAndEnumValues : null),
			false,
			$path . '->mapOfNullsAndEnumValues'
		);
		$o->mapOfEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfEnumValuesOrNull) ? $o->mapOfEnumValuesOrNull : null),
			true,
			$path . '->mapOfEnumValuesOrNull'
		);
		$o->mapOfNullsAndEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
					\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndEnumValuesOrNull) ? $o->mapOfNullsAndEnumValuesOrNull : null),
			true,
			$path . '->mapOfNullsAndEnumValuesOrNull'
		);
		$o->arrayOfMapsOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertMap(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfMapsOfEnumValues) ? $o->arrayOfMapsOfEnumValues : null),
			false,
			$path . '->arrayOfMapsOfEnumValues'
		);
		$o->arrayOfMapsOfEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertMap(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfMapsOfEnumValuesOrNull) ? $o->arrayOfMapsOfEnumValuesOrNull : null),
			true,
			$path . '->arrayOfMapsOfEnumValuesOrNull'
		);
		$o->arrayOfNullsAndMapsOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertMap(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfNullsAndMapsOfEnumValues) ? $o->arrayOfNullsAndMapsOfEnumValues : null),
			false,
			$path . '->arrayOfNullsAndMapsOfEnumValues'
		);
		$o->arrayOfMapsOfNullsAndEnumValues = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertMap(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							true,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfMapsOfNullsAndEnumValues) ? $o->arrayOfMapsOfNullsAndEnumValues : null),
			false,
			$path . '->arrayOfMapsOfNullsAndEnumValues'
		);
		$o->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertMap(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							true,
							$path
						);
					},
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull) ? $o->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull : null),
			true,
			$path . '->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull'
		);
		$o->mapOfArraysOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertArray(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfArraysOfEnumValues) ? $o->mapOfArraysOfEnumValues : null),
			false,
			$path . '->mapOfArraysOfEnumValues'
		);
		$o->mapOfArraysOfEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertArray(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfArraysOfEnumValuesOrNull) ? $o->mapOfArraysOfEnumValuesOrNull : null),
			true,
			$path . '->mapOfArraysOfEnumValuesOrNull'
		);
		$o->mapOfNullsAndArraysOfEnumValues = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertArray(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							false,
							$path
						);
					},
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndArraysOfEnumValues) ? $o->mapOfNullsAndArraysOfEnumValues : null),
			false,
			$path . '->mapOfNullsAndArraysOfEnumValues'
		);
		$o->mapOfArraysOfNullsAndEnumValues = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertArray(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							true,
							$path
						);
					},
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfArraysOfNullsAndEnumValues) ? $o->mapOfArraysOfNullsAndEnumValues : null),
			false,
			$path . '->mapOfArraysOfNullsAndEnumValues'
		);
		$o->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertArray(
					/**
					 * @param mixed $value
					 * @param ?string $path
					 * @return mixed
					 * @throws \Exception
					 */
					function ($value, $path) {
						return \JCG\Test\generated\Util\AssertUtil::assertExactValue(
							\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
							$value,
							true,
							$path
						);
					},
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull) ? $o->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull : null),
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueChildTest $result */
		$result = $o;
		return $result;
	}
}
