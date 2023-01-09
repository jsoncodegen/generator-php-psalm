<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonNumberTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberTest, got $type (at $path)"
			);
		}
		$o->count = \JCG\Test\generated\Util\AssertUtil::assertNumber(
			(isset($o->count) ? $o->count : null),
			false,
			$path . '->count'
		);
		$o->countWithDescription = \JCG\Test\generated\Util\AssertUtil::assertNumber(
			(isset($o->countWithDescription) ? $o->countWithDescription : null),
			false,
			$path . '->countWithDescription'
		);
		$o->countOrNull = \JCG\Test\generated\Util\AssertUtil::assertNumber(
			(isset($o->countOrNull) ? $o->countOrNull : null),
			true,
			$path . '->countOrNull'
		);
		$o->arrayOfCounts = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfCounts) ? $o->arrayOfCounts : null),
			false,
			$path . '->arrayOfCounts'
		);
		$o->arrayOfArraysOfCounts = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->arrayOfArraysOfCounts) ? $o->arrayOfArraysOfCounts : null),
			false,
			$path . '->arrayOfArraysOfCounts'
		);
		$o->arrayOfCountsAndNulls = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfCountsAndNulls) ? $o->arrayOfCountsAndNulls : null),
			false,
			$path . '->arrayOfCountsAndNulls'
		);
		$o->arrayOfCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfCountsOrNull) ? $o->arrayOfCountsOrNull : null),
			true,
			$path . '->arrayOfCountsOrNull'
		);
		$o->arrayOfCountsAndNullsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfCountsAndNullsOrNull) ? $o->arrayOfCountsAndNullsOrNull : null),
			true,
			$path . '->arrayOfCountsAndNullsOrNull'
		);
		$o->mapOfCounts = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfCounts) ? $o->mapOfCounts : null),
			false,
			$path . '->mapOfCounts'
		);
		$o->mapOfMapsOfCounts = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->mapOfMapsOfCounts) ? $o->mapOfMapsOfCounts : null),
			false,
			$path . '->mapOfMapsOfCounts'
		);
		$o->mapOfNullsAndCounts = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndCounts) ? $o->mapOfNullsAndCounts : null),
			false,
			$path . '->mapOfNullsAndCounts'
		);
		$o->mapOfCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfCountsOrNull) ? $o->mapOfCountsOrNull : null),
			true,
			$path . '->mapOfCountsOrNull'
		);
		$o->mapOfNullsAndCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertNumber(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndCountsOrNull) ? $o->mapOfNullsAndCountsOrNull : null),
			true,
			$path . '->mapOfNullsAndCountsOrNull'
		);
		$o->arrayOfMapsOfCounts = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->arrayOfMapsOfCounts) ? $o->arrayOfMapsOfCounts : null),
			false,
			$path . '->arrayOfMapsOfCounts'
		);
		$o->arrayOfMapsOfCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->arrayOfMapsOfCountsOrNull) ? $o->arrayOfMapsOfCountsOrNull : null),
			true,
			$path . '->arrayOfMapsOfCountsOrNull'
		);
		$o->arrayOfNullsAndMapsOfCounts = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->arrayOfNullsAndMapsOfCounts) ? $o->arrayOfNullsAndMapsOfCounts : null),
			false,
			$path . '->arrayOfNullsAndMapsOfCounts'
		);
		$o->arrayOfMapsOfNullsAndCounts = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->arrayOfMapsOfNullsAndCounts) ? $o->arrayOfMapsOfNullsAndCounts : null),
			false,
			$path . '->arrayOfMapsOfNullsAndCounts'
		);
		$o->arrayOfNullsAndMapsOfNullsAndCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->arrayOfNullsAndMapsOfNullsAndCountsOrNull) ? $o->arrayOfNullsAndMapsOfNullsAndCountsOrNull : null),
			true,
			$path . '->arrayOfNullsAndMapsOfNullsAndCountsOrNull'
		);
		$o->mapOfArraysOfCounts = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->mapOfArraysOfCounts) ? $o->mapOfArraysOfCounts : null),
			false,
			$path . '->mapOfArraysOfCounts'
		);
		$o->mapOfArraysOfCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->mapOfArraysOfCountsOrNull) ? $o->mapOfArraysOfCountsOrNull : null),
			true,
			$path . '->mapOfArraysOfCountsOrNull'
		);
		$o->mapOfNullsAndArraysOfCounts = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->mapOfNullsAndArraysOfCounts) ? $o->mapOfNullsAndArraysOfCounts : null),
			false,
			$path . '->mapOfNullsAndArraysOfCounts'
		);
		$o->mapOfArraysOfNullsAndCounts = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->mapOfArraysOfNullsAndCounts) ? $o->mapOfArraysOfNullsAndCounts : null),
			false,
			$path . '->mapOfArraysOfNullsAndCounts'
		);
		$o->mapOfNullsAndArraysOfNullsAndCountsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertNumber(
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
			(isset($o->mapOfNullsAndArraysOfNullsAndCountsOrNull) ? $o->mapOfNullsAndArraysOfNullsAndCountsOrNull : null),
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndCountsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonNumberTest $result */
		$result = $o;
		return $result;
	}
}
