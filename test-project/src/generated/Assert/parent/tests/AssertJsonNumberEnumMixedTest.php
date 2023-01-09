<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonNumberEnumMixedTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnumMixedTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumMixedTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumMixedTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumMixedTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumMixedTest, got $type (at $path)"
			);
		}
		$o->child = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonNumberEnum::assert(
			(isset($o->child) ? $o->child : null),
			false,
			$path . '->child:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonNumberEnum'
		);
		$o->local = \JCG\Test\generated\Assert\parent\tests\AssertJsonNumberEnum::assert(
			(isset($o->local) ? $o->local : null),
			false,
			$path . '->local:\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnum'
		);
		$o->parent = \JCG\Test\generated\Assert\parent\AssertJsonNumberEnum::assert(
			(isset($o->parent) ? $o->parent : null),
			false,
			$path . '->parent:\\JCG\\Test\\generated\\Type\\parent\\JsonNumberEnum'
		);
		$o->root = \JCG\Test\generated\Assert\AssertJsonNumberEnum::assert(
			(isset($o->root) ? $o->root : null),
			false,
			$path . '->root:\\JCG\\Test\\generated\\Type\\JsonNumberEnum'
		);
		$o->sibling = \JCG\Test\generated\Assert\parent\sibling\AssertJsonNumberEnum::assert(
			(isset($o->sibling) ? $o->sibling : null),
			false,
			$path . '->sibling:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonNumberEnum'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnumMixedTest $result */
		$result = $o;
		return $result;
	}
}
