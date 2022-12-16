<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringEnumSiblingTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnumSiblingTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumSiblingTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumSiblingTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumSiblingTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumSiblingTest, got $type (at $path)"
			);
		}
		$o->enum_ = \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
			$o->enum_,
			false,
			$path . '->enum_:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum'
		);
		$o->enumWithDescription = \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
			$o->enumWithDescription,
			false,
			$path . '->enumWithDescription:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum'
		);
		$o->enumOrNull = \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
			$o->enumOrNull,
			true,
			$path . '->enumOrNull:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum'
		);
		$o->arrayOfEnums = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			$o->arrayOfEnums,
			false,
			$path . '->arrayOfEnums'
		);
		$o->arrayOfArraysOfEnums = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->arrayOfArraysOfEnums,
			false,
			$path . '->arrayOfArraysOfEnums'
		);
		$o->arrayOfEnumsAndNulls = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			$o->arrayOfEnumsAndNulls,
			false,
			$path . '->arrayOfEnumsAndNulls'
		);
		$o->arrayOfEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			$o->arrayOfEnumsOrNull,
			true,
			$path . '->arrayOfEnumsOrNull'
		);
		$o->arrayOfEnumsAndNullsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			$o->arrayOfEnumsAndNullsOrNull,
			true,
			$path . '->arrayOfEnumsAndNullsOrNull'
		);
		$o->mapOfEnums = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			$o->mapOfEnums,
			false,
			$path . '->mapOfEnums'
		);
		$o->mapOfMapsOfEnums = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->mapOfMapsOfEnums,
			false,
			$path . '->mapOfMapsOfEnums'
		);
		$o->mapOfNullsAndEnums = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndEnums,
			false,
			$path . '->mapOfNullsAndEnums'
		);
		$o->mapOfEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			$o->mapOfEnumsOrNull,
			true,
			$path . '->mapOfEnumsOrNull'
		);
		$o->mapOfNullsAndEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			$o->mapOfNullsAndEnumsOrNull,
			true,
			$path . '->mapOfNullsAndEnumsOrNull'
		);
		$o->arrayOfMapsOfEnums = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->arrayOfMapsOfEnums,
			false,
			$path . '->arrayOfMapsOfEnums'
		);
		$o->arrayOfMapsOfEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->arrayOfMapsOfEnumsOrNull,
			true,
			$path . '->arrayOfMapsOfEnumsOrNull'
		);
		$o->arrayOfNullsAndMapsOfEnums = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->arrayOfNullsAndMapsOfEnums,
			false,
			$path . '->arrayOfNullsAndMapsOfEnums'
		);
		$o->arrayOfMapsOfNullsAndEnums = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->arrayOfMapsOfNullsAndEnums,
			false,
			$path . '->arrayOfMapsOfNullsAndEnums'
		);
		$o->arrayOfNullsAndMapsOfNullsAndEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertArray(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->arrayOfNullsAndMapsOfNullsAndEnumsOrNull,
			true,
			$path . '->arrayOfNullsAndMapsOfNullsAndEnumsOrNull'
		);
		$o->mapOfArraysOfEnums = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->mapOfArraysOfEnums,
			false,
			$path . '->mapOfArraysOfEnums'
		);
		$o->mapOfArraysOfEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->mapOfArraysOfEnumsOrNull,
			true,
			$path . '->mapOfArraysOfEnumsOrNull'
		);
		$o->mapOfNullsAndArraysOfEnums = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->mapOfNullsAndArraysOfEnums,
			false,
			$path . '->mapOfNullsAndArraysOfEnums'
		);
		$o->mapOfArraysOfNullsAndEnums = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->mapOfArraysOfNullsAndEnums,
			false,
			$path . '->mapOfArraysOfNullsAndEnums'
		);
		$o->mapOfNullsAndArraysOfNullsAndEnumsOrNull = \JCG\Test\generated\Util\AssertUtil::assertMap(
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
						return \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
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
			$o->mapOfNullsAndArraysOfNullsAndEnumsOrNull,
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndEnumsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumSiblingTest $result */
		$result = $o;
		return $result;
	}
}
