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
			$o->flag,
			false,
			$path . '->flag'
		);
		$o->flagWithDescription = \JCG\Test\generated\Util\AssertUtil::assertBoolean(
			$o->flagWithDescription,
			false,
			$path . '->flagWithDescription'
		);
		$o->flagOrNull = \JCG\Test\generated\Util\AssertUtil::assertBoolean(
			$o->flagOrNull,
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
			$o->arrayOfFlags,
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
			$o->arrayOfArraysOfFlags,
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
			$o->arrayOfFlagsAndNulls,
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
			$o->arrayOfFlagsOrNull,
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
			$o->arrayOfFlagsAndNullsOrNull,
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
			$o->mapOfFlags,
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
			$o->mapOfMapsOfFlags,
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
			$o->mapOfNullsAndFlags,
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
			$o->mapOfFlagsOrNull,
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
			$o->mapOfNullsAndFlagsOrNull,
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
			$o->arrayOfMapsOfFlags,
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
			$o->arrayOfMapsOfFlagsOrNull,
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
			$o->arrayOfNullsAndMapsOfFlags,
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
			$o->arrayOfMapsOfNullsAndFlags,
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
			$o->arrayOfNullsAndMapsOfNullsAndFlagsOrNull,
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
			$o->mapOfArraysOfFlags,
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
			$o->mapOfArraysOfFlagsOrNull,
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
			$o->mapOfNullsAndArraysOfFlags,
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
			$o->mapOfArraysOfNullsAndFlags,
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
			$o->mapOfNullsAndArraysOfNullsAndFlagsOrNull,
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndFlagsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonBooleanTest $result */
		$result = $o;
		return $result;
	}
}
