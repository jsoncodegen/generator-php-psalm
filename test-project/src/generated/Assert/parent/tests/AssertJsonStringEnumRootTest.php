<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringEnumRootTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnumRootTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumRootTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumRootTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumRootTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumRootTest, got $type (at $path)"
			);
		}
		$o->enum_ = \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
			(isset($o->enum_) ? $o->enum_ : null),
			false,
			$path . '->enum_:\\JCG\\Test\\generated\\Type\\JsonStringEnum'
		);
		$o->enumWithDescription = \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
			(isset($o->enumWithDescription) ? $o->enumWithDescription : null),
			false,
			$path . '->enumWithDescription:\\JCG\\Test\\generated\\Type\\JsonStringEnum'
		);
		$o->enumOrNull = \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
			(isset($o->enumOrNull) ? $o->enumOrNull : null),
			true,
			$path . '->enumOrNull:\\JCG\\Test\\generated\\Type\\JsonStringEnum'
		);
		$o->arrayOfEnums = \JCG\Test\generated\Util\AssertUtil::assertArray(
			/**
			 * @param mixed $value
			 * @param ?string $path
			 * @return mixed
			 * @throws \Exception
			 */
			function ($value, $path) {
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfEnums) ? $o->arrayOfEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->arrayOfArraysOfEnums) ? $o->arrayOfArraysOfEnums : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfEnumsAndNulls) ? $o->arrayOfEnumsAndNulls : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->arrayOfEnumsOrNull) ? $o->arrayOfEnumsOrNull : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->arrayOfEnumsAndNullsOrNull) ? $o->arrayOfEnumsAndNullsOrNull : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfEnums) ? $o->mapOfEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->mapOfMapsOfEnums) ? $o->mapOfMapsOfEnums : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndEnums) ? $o->mapOfNullsAndEnums : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					false,
					$path
				);
			},
			(isset($o->mapOfEnumsOrNull) ? $o->mapOfEnumsOrNull : null),
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
				return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
					$value,
					true,
					$path
				);
			},
			(isset($o->mapOfNullsAndEnumsOrNull) ? $o->mapOfNullsAndEnumsOrNull : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->arrayOfMapsOfEnums) ? $o->arrayOfMapsOfEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->arrayOfMapsOfEnumsOrNull) ? $o->arrayOfMapsOfEnumsOrNull : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->arrayOfNullsAndMapsOfEnums) ? $o->arrayOfNullsAndMapsOfEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->arrayOfMapsOfNullsAndEnums) ? $o->arrayOfMapsOfNullsAndEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->arrayOfNullsAndMapsOfNullsAndEnumsOrNull) ? $o->arrayOfNullsAndMapsOfNullsAndEnumsOrNull : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->mapOfArraysOfEnums) ? $o->mapOfArraysOfEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->mapOfArraysOfEnumsOrNull) ? $o->mapOfArraysOfEnumsOrNull : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->mapOfNullsAndArraysOfEnums) ? $o->mapOfNullsAndArraysOfEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->mapOfArraysOfNullsAndEnums) ? $o->mapOfArraysOfNullsAndEnums : null),
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
						return \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
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
			(isset($o->mapOfNullsAndArraysOfNullsAndEnumsOrNull) ? $o->mapOfNullsAndArraysOfNullsAndEnumsOrNull : null),
			true,
			$path . '->mapOfNullsAndArraysOfNullsAndEnumsOrNull'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumRootTest $result */
		$result = $o;
		return $result;
	}
}
