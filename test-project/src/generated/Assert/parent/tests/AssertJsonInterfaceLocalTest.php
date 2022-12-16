<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonInterfaceLocalTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonInterfaceLocalTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceLocalTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceLocalTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceLocalTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceLocalTest, got $type (at $path)"
			);
		}
		$o->object_ = \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
			$o->object_,
			false,
			$path . '->object_'
		);
		$o->objectWithDescription = \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
			$o->objectWithDescription,
			false,
			$path . '->objectWithDescription'
		);
		$o->objectOrNull = \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
			$o->objectOrNull,
			true,
			$path . '->objectOrNull'
		);
		$o->arrayOfObjects = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			$o->arrayOfObjects,
			false,
			$path . '->arrayOfObjects'
		);
		$o->arrayOfArraysOfObjects = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->arrayOfArraysOfObjects,
			false,
			$path . '->arrayOfArraysOfObjects'
		);
		$o->arrayOfObjectsAndNulls = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			$o->arrayOfObjectsAndNulls,
			false,
			$path . '->arrayOfObjectsAndNulls'
		);
		$o->arrayOfObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			$o->arrayOfObjectsOrNull,
			true,
			$path . '->arrayOfObjectsOrNull'
		);
		$o->arrayOfObjectsAndNullsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			$o->arrayOfObjectsAndNullsOrNull,
			true,
			$path . '->arrayOfObjectsAndNullsOrNull'
		);
		$o->mapOfObjects = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			$o->mapOfObjects,
			false,
			$path . '->mapOfObjects'
		);
		$o->mapOfMapsOfObjects = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->mapOfMapsOfObjects,
			false,
			$path . '->mapOfMapsOfObjects'
		);
		$o->mapOfNullsAndObjects = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndObjects,
			false,
			$path . '->mapOfNullsAndObjects'
		);
		$o->mapOfObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			$o->mapOfObjectsOrNull,
			true,
			$path . '->mapOfObjectsOrNull'
		);
		$o->mapOfNullsAndObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndObjectsOrNull,
			true,
			$path . '->mapOfNullsAndObjectsOrNull'
		);
		$o->arrayOfMapsOfObjects = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->arrayOfMapsOfObjects,
			false,
			$path . '->arrayOfMapsOfObjects'
		);
		$o->arrayOfMapsOfObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->arrayOfMapsOfObjectsOrNull,
			true,
			$path . '->arrayOfMapsOfObjectsOrNull'
		);
		$o->arrayOfNullsAndMapsOfObjects = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->arrayOfNullsAndMapsOfObjects,
			false,
			$path . '->arrayOfNullsAndMapsOfObjects'
		);
		$o->arrayOfMapsOfNullsAndObjects = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->arrayOfMapsOfNullsAndObjects,
			false,
			$path . '->arrayOfMapsOfNullsAndObjects'
		);
		$o->arrayOfNullsAndMapsOfNullsAndObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->arrayOfNullsAndMapsOfNullsAndObjectsOrNull,
			true,
			$path . '->arrayOfNullsAndMapsOfNullsAndObjectsOrNull'
		);
		$o->mapOfArraysOfObjects = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->mapOfArraysOfObjects,
			false,
			$path . '->mapOfArraysOfObjects'
		);
		$o->mapOfArraysOfObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->mapOfArraysOfObjectsOrNull,
			true,
			$path . '->mapOfArraysOfObjectsOrNull'
		);
		$o->mapOfNullsAndArraysOfObjects = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->mapOfNullsAndArraysOfObjects,
			false,
			$path . '->mapOfNullsAndArraysOfObjects'
		);
		$o->mapOfArraysOfNullsAndObjects = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->mapOfArraysOfNullsAndObjects,
			false,
			$path . '->mapOfArraysOfNullsAndObjects'
		);
		$o->mapOfNullsAndArraysOfNullsAndObjectsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
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
			$o->mapOfNullsAndArraysOfNullsAndObjectsOrNull,
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndObjectsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonInterfaceLocalTest $result */
		$result = $o;
		return $result;
	}
}
