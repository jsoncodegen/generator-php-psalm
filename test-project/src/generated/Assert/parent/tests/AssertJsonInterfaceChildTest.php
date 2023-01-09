<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonInterfaceChildTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonInterfaceChildTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceChildTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceChildTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceChildTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceChildTest, got $type (at $path)"
			);
		}
		$o->object_ = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
			(isset($o->object_) ? $o->object_ : null),
			false,
			$path . '->object_'
		);
		$o->objectWithDescription = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
			(isset($o->objectWithDescription) ? $o->objectWithDescription : null),
			false,
			$path . '->objectWithDescription'
		);
		$o->objectOrNull = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
			(isset($o->objectOrNull) ? $o->objectOrNull : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfObjects) ? $o->arrayOfObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->arrayOfArraysOfObjects) ? $o->arrayOfArraysOfObjects : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfObjectsAndNulls) ? $o->arrayOfObjectsAndNulls : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfObjectsOrNull) ? $o->arrayOfObjectsOrNull : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfObjectsAndNullsOrNull) ? $o->arrayOfObjectsAndNullsOrNull : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfObjects) ? $o->mapOfObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->mapOfMapsOfObjects) ? $o->mapOfMapsOfObjects : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndObjects) ? $o->mapOfNullsAndObjects : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfObjectsOrNull) ? $o->mapOfObjectsOrNull : null),
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
				return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndObjectsOrNull) ? $o->mapOfNullsAndObjectsOrNull : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->arrayOfMapsOfObjects) ? $o->arrayOfMapsOfObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->arrayOfMapsOfObjectsOrNull) ? $o->arrayOfMapsOfObjectsOrNull : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->arrayOfNullsAndMapsOfObjects) ? $o->arrayOfNullsAndMapsOfObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->arrayOfMapsOfNullsAndObjects) ? $o->arrayOfMapsOfNullsAndObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->arrayOfNullsAndMapsOfNullsAndObjectsOrNull) ? $o->arrayOfNullsAndMapsOfNullsAndObjectsOrNull : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->mapOfArraysOfObjects) ? $o->mapOfArraysOfObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->mapOfArraysOfObjectsOrNull) ? $o->mapOfArraysOfObjectsOrNull : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->mapOfNullsAndArraysOfObjects) ? $o->mapOfNullsAndArraysOfObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->mapOfArraysOfNullsAndObjects) ? $o->mapOfArraysOfNullsAndObjects : null),
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
						return \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
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
			(isset($o->mapOfNullsAndArraysOfNullsAndObjectsOrNull) ? $o->mapOfNullsAndArraysOfNullsAndObjectsOrNull : null),
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndObjectsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonInterfaceChildTest $result */
		$result = $o;
		return $result;
	}
}
