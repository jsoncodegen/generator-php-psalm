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
		\JCG\Test\generated\Util\AssertUtil::assertFieldsIn($o, ["name","nameWithDescription","nameOrNull","arrayOfNames","arrayOfArraysOfNames","arrayOfNamesAndNulls","arrayOfNamesOrNull","arrayOfNamesAndNullsOrNull","mapOfNames","mapOfMapsOfNames","mapOfNullsAndNames","mapOfNamesOrNull","mapOfNullsAndNamesOrNull","arrayOfMapsOfNames","arrayOfMapsOfNamesOrNull","arrayOfNullsAndMapsOfNames","arrayOfMapsOfNullsAndNames","arrayOfNullsAndMapsOfNullsAndNamesOrNull","mapOfArraysOfNames","mapOfArraysOfNamesOrNull","mapOfNullsAndArraysOfNames","mapOfArraysOfNullsAndNames","mapOfNullsAndArraysOfNullsAndNamesOrNull"], $path);
		$o->name = \JCG\Test\generated\Util\AssertUtil::assertString(
			(isset($o->name) ? $o->name : null),
			false,
			$path . '->name'
		);
		$o->nameWithDescription = \JCG\Test\generated\Util\AssertUtil::assertString(
			(isset($o->nameWithDescription) ? $o->nameWithDescription : null),
			false,
			$path . '->nameWithDescription'
		);
		$o->nameOrNull = \JCG\Test\generated\Util\AssertUtil::assertString(
			(isset($o->nameOrNull) ? $o->nameOrNull : null),
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
			(isset($o->arrayOfNames) ? $o->arrayOfNames : null),
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
			(isset($o->arrayOfArraysOfNames) ? $o->arrayOfArraysOfNames : null),
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
			(isset($o->arrayOfNamesAndNulls) ? $o->arrayOfNamesAndNulls : null),
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
			(isset($o->arrayOfNamesOrNull) ? $o->arrayOfNamesOrNull : null),
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
			(isset($o->arrayOfNamesAndNullsOrNull) ? $o->arrayOfNamesAndNullsOrNull : null),
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
			(isset($o->mapOfNames) ? $o->mapOfNames : null),
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
			(isset($o->mapOfMapsOfNames) ? $o->mapOfMapsOfNames : null),
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
			(isset($o->mapOfNullsAndNames) ? $o->mapOfNullsAndNames : null),
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
			(isset($o->mapOfNamesOrNull) ? $o->mapOfNamesOrNull : null),
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
			(isset($o->mapOfNullsAndNamesOrNull) ? $o->mapOfNullsAndNamesOrNull : null),
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
			(isset($o->arrayOfMapsOfNames) ? $o->arrayOfMapsOfNames : null),
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
			(isset($o->arrayOfMapsOfNamesOrNull) ? $o->arrayOfMapsOfNamesOrNull : null),
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
			(isset($o->arrayOfNullsAndMapsOfNames) ? $o->arrayOfNullsAndMapsOfNames : null),
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
			(isset($o->arrayOfMapsOfNullsAndNames) ? $o->arrayOfMapsOfNullsAndNames : null),
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
			(isset($o->arrayOfNullsAndMapsOfNullsAndNamesOrNull) ? $o->arrayOfNullsAndMapsOfNullsAndNamesOrNull : null),
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
			(isset($o->mapOfArraysOfNames) ? $o->mapOfArraysOfNames : null),
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
			(isset($o->mapOfArraysOfNamesOrNull) ? $o->mapOfArraysOfNamesOrNull : null),
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
			(isset($o->mapOfNullsAndArraysOfNames) ? $o->mapOfNullsAndArraysOfNames : null),
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
			(isset($o->mapOfArraysOfNullsAndNames) ? $o->mapOfArraysOfNullsAndNames : null),
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
			(isset($o->mapOfNullsAndArraysOfNullsAndNamesOrNull) ? $o->mapOfNullsAndArraysOfNullsAndNamesOrNull : null),
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndNamesOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringTest $result */
		$result = $o;
		return $result;
	}
}
