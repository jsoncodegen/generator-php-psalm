<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringEnumValueParentTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueParentTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueParentTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueParentTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueParentTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueParentTest, got $type (at $path)"
			);
		}
		$o->enumValue = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
			$o->enumValue,
			false,
			$path . '->enumValue:\\JCG\\Test\\generated\\Type\\parent\\JsonStringEnum:Name'
		);
		$o->enumValueWithDescription = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
			$o->enumValueWithDescription,
			false,
			$path . '->enumValueWithDescription:\\JCG\\Test\\generated\\Type\\parent\\JsonStringEnum:Name'
		);
		$o->enumValueOrNull = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
			$o->enumValueOrNull,
			true,
			$path . '->enumValueOrNull:\\JCG\\Test\\generated\\Type\\parent\\JsonStringEnum:Name'
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			$o->arrayOfEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->arrayOfArraysOfEnumValues,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			$o->arrayOfEnumValuesAndNulls,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			$o->arrayOfEnumValuesOrNull,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			$o->arrayOfEnumValuesAndNullsOrNull,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			$o->mapOfEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->mapOfMapsOfEnumValues,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndEnumValues,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					false,
					$path
				);
			},
			$o->mapOfEnumValuesOrNull,
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
					\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndEnumValuesOrNull,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->arrayOfMapsOfEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->arrayOfMapsOfEnumValuesOrNull,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->arrayOfNullsAndMapsOfEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->arrayOfMapsOfNullsAndEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->arrayOfNullsAndMapsOfNullsAndEnumValuesOrNull,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->mapOfArraysOfEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->mapOfArraysOfEnumValuesOrNull,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->mapOfNullsAndArraysOfEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->mapOfArraysOfNullsAndEnumValues,
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
							\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
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
			$o->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull,
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndEnumValuesOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueParentTest $result */
		$result = $o;
		return $result;
	}
}
