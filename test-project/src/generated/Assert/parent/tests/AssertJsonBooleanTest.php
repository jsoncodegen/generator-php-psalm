<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonBooleanTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonBooleanTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonBooleanTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonBooleanTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonBooleanTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonBooleanTest, got $type (at $path)"
			);
		}
		$o->flag = \JCG\Test\generated\Util\AssertUtil::assertBoolean(
			(isset($o->flag) ? $o->flag : null),
			false,
			$path . '->flag'
		);
		$o->flagWithDescription = \JCG\Test\generated\Util\AssertUtil::assertBoolean(
			(isset($o->flagWithDescription) ? $o->flagWithDescription : null),
			false,
			$path . '->flagWithDescription'
		);
		$o->flagOrNull = \JCG\Test\generated\Util\AssertUtil::assertBoolean(
			(isset($o->flagOrNull) ? $o->flagOrNull : null),
			true,
			$path . '->flagOrNull'
		);
		$o->arrayOfFlags = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfFlags) ? $o->arrayOfFlags : null),
			false,
			$path . '->arrayOfFlags'
		);
		$o->arrayOfArraysOfFlags = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->arrayOfArraysOfFlags) ? $o->arrayOfArraysOfFlags : null),
			false,
			$path . '->arrayOfArraysOfFlags'
		);
		$o->arrayOfFlagsAndNulls = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfFlagsAndNulls) ? $o->arrayOfFlagsAndNulls : null),
			false,
			$path . '->arrayOfFlagsAndNulls'
		);
		$o->arrayOfFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfFlagsOrNull) ? $o->arrayOfFlagsOrNull : null),
			true,
			$path . '->arrayOfFlagsOrNull'
		);
		$o->arrayOfFlagsAndNullsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfFlagsAndNullsOrNull) ? $o->arrayOfFlagsAndNullsOrNull : null),
			true,
			$path . '->arrayOfFlagsAndNullsOrNull'
		);
		$o->mapOfFlags = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfFlags) ? $o->mapOfFlags : null),
			false,
			$path . '->mapOfFlags'
		);
		$o->mapOfMapsOfFlags = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->mapOfMapsOfFlags) ? $o->mapOfMapsOfFlags : null),
			false,
			$path . '->mapOfMapsOfFlags'
		);
		$o->mapOfNullsAndFlags = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndFlags) ? $o->mapOfNullsAndFlags : null),
			false,
			$path . '->mapOfNullsAndFlags'
		);
		$o->mapOfFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfFlagsOrNull) ? $o->mapOfFlagsOrNull : null),
			true,
			$path . '->mapOfFlagsOrNull'
		);
		$o->mapOfNullsAndFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndFlagsOrNull) ? $o->mapOfNullsAndFlagsOrNull : null),
			true,
			$path . '->mapOfNullsAndFlagsOrNull'
		);
		$o->arrayOfMapsOfFlags = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->arrayOfMapsOfFlags) ? $o->arrayOfMapsOfFlags : null),
			false,
			$path . '->arrayOfMapsOfFlags'
		);
		$o->arrayOfMapsOfFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->arrayOfMapsOfFlagsOrNull) ? $o->arrayOfMapsOfFlagsOrNull : null),
			true,
			$path . '->arrayOfMapsOfFlagsOrNull'
		);
		$o->arrayOfNullsAndMapsOfFlags = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->arrayOfNullsAndMapsOfFlags) ? $o->arrayOfNullsAndMapsOfFlags : null),
			false,
			$path . '->arrayOfNullsAndMapsOfFlags'
		);
		$o->arrayOfMapsOfNullsAndFlags = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->arrayOfMapsOfNullsAndFlags) ? $o->arrayOfMapsOfNullsAndFlags : null),
			false,
			$path . '->arrayOfMapsOfNullsAndFlags'
		);
		$o->arrayOfNullsAndMapsOfNullsAndFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->arrayOfNullsAndMapsOfNullsAndFlagsOrNull) ? $o->arrayOfNullsAndMapsOfNullsAndFlagsOrNull : null),
			true,
			$path . '->arrayOfNullsAndMapsOfNullsAndFlagsOrNull'
		);
		$o->mapOfArraysOfFlags = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->mapOfArraysOfFlags) ? $o->mapOfArraysOfFlags : null),
			false,
			$path . '->mapOfArraysOfFlags'
		);
		$o->mapOfArraysOfFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->mapOfArraysOfFlagsOrNull) ? $o->mapOfArraysOfFlagsOrNull : null),
			true,
			$path . '->mapOfArraysOfFlagsOrNull'
		);
		$o->mapOfNullsAndArraysOfFlags = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->mapOfNullsAndArraysOfFlags) ? $o->mapOfNullsAndArraysOfFlags : null),
			false,
			$path . '->mapOfNullsAndArraysOfFlags'
		);
		$o->mapOfArraysOfNullsAndFlags = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->mapOfArraysOfNullsAndFlags) ? $o->mapOfArraysOfNullsAndFlags : null),
			false,
			$path . '->mapOfArraysOfNullsAndFlags'
		);
		$o->mapOfNullsAndArraysOfNullsAndFlagsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertBoolean(
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
			(isset($o->mapOfNullsAndArraysOfNullsAndFlagsOrNull) ? $o->mapOfNullsAndArraysOfNullsAndFlagsOrNull : null),
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndFlagsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonBooleanTest $result */
		$result = $o;
		return $result;
	}
}
