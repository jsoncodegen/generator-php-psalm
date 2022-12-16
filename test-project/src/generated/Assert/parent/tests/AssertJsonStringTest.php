<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringTest, got $type (at $path)"
			);
		}
		$o->name = \JCG\Test\generated\Util\AssertUtil::assertString(
			$o->name,
			false,
			$path . '->name'
		);
		$o->nameWithDescription = \JCG\Test\generated\Util\AssertUtil::assertString(
			$o->nameWithDescription,
			false,
			$path . '->nameWithDescription'
		);
		$o->nameOrNull = \JCG\Test\generated\Util\AssertUtil::assertString(
			$o->nameOrNull,
			true,
			$path . '->nameOrNull'
		);
		$o->arrayOfNames = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					false,
					$path
				);
			},
			$o->arrayOfNames,
			false,
			$path . '->arrayOfNames'
		);
		$o->arrayOfArraysOfNames = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->arrayOfArraysOfNames,
			false,
			$path . '->arrayOfArraysOfNames'
		);
		$o->arrayOfNamesAndNulls = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					true,
					$path
				);
			},
			$o->arrayOfNamesAndNulls,
			false,
			$path . '->arrayOfNamesAndNulls'
		);
		$o->arrayOfNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					false,
					$path
				);
			},
			$o->arrayOfNamesOrNull,
			true,
			$path . '->arrayOfNamesOrNull'
		);
		$o->arrayOfNamesAndNullsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					true,
					$path
				);
			},
			$o->arrayOfNamesAndNullsOrNull,
			true,
			$path . '->arrayOfNamesAndNullsOrNull'
		);
		$o->mapOfNames = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					false,
					$path
				);
			},
			$o->mapOfNames,
			false,
			$path . '->mapOfNames'
		);
		$o->mapOfMapsOfNames = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->mapOfMapsOfNames,
			false,
			$path . '->mapOfMapsOfNames'
		);
		$o->mapOfNullsAndNames = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndNames,
			false,
			$path . '->mapOfNullsAndNames'
		);
		$o->mapOfNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					false,
					$path
				);
			},
			$o->mapOfNamesOrNull,
			true,
			$path . '->mapOfNamesOrNull'
		);
		$o->mapOfNullsAndNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Util\AssertUtil::assertString(
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndNamesOrNull,
			true,
			$path . '->mapOfNullsAndNamesOrNull'
		);
		$o->arrayOfMapsOfNames = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->arrayOfMapsOfNames,
			false,
			$path . '->arrayOfMapsOfNames'
		);
		$o->arrayOfMapsOfNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->arrayOfMapsOfNamesOrNull,
			true,
			$path . '->arrayOfMapsOfNamesOrNull'
		);
		$o->arrayOfNullsAndMapsOfNames = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->arrayOfNullsAndMapsOfNames,
			false,
			$path . '->arrayOfNullsAndMapsOfNames'
		);
		$o->arrayOfMapsOfNullsAndNames = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->arrayOfMapsOfNullsAndNames,
			false,
			$path . '->arrayOfMapsOfNullsAndNames'
		);
		$o->arrayOfNullsAndMapsOfNullsAndNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->arrayOfNullsAndMapsOfNullsAndNamesOrNull,
			true,
			$path . '->arrayOfNullsAndMapsOfNullsAndNamesOrNull'
		);
		$o->mapOfArraysOfNames = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->mapOfArraysOfNames,
			false,
			$path . '->mapOfArraysOfNames'
		);
		$o->mapOfArraysOfNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->mapOfArraysOfNamesOrNull,
			true,
			$path . '->mapOfArraysOfNamesOrNull'
		);
		$o->mapOfNullsAndArraysOfNames = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->mapOfNullsAndArraysOfNames,
			false,
			$path . '->mapOfNullsAndArraysOfNames'
		);
		$o->mapOfArraysOfNullsAndNames = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->mapOfArraysOfNullsAndNames,
			false,
			$path . '->mapOfArraysOfNullsAndNames'
		);
		$o->mapOfNullsAndArraysOfNullsAndNamesOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Util\AssertUtil::assertString(
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
			$o->mapOfNullsAndArraysOfNullsAndNamesOrNull,
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndNamesOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringTest $result */
		$result = $o;
		return $result;
	}
}
