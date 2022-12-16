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
			$o->child,
			false,
			$path . '->child:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonNumberEnum'
		);
		$o->local = \JCG\Test\generated\Assert\parent\tests\AssertJsonNumberEnum::assert(
			$o->local,
			false,
			$path . '->local:\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnum'
		);
		$o->parent = \JCG\Test\generated\Assert\parent\AssertJsonNumberEnum::assert(
			$o->parent,
			false,
			$path . '->parent:\\JCG\\Test\\generated\\Type\\parent\\JsonNumberEnum'
		);
		$o->root = \JCG\Test\generated\Assert\AssertJsonNumberEnum::assert(
			$o->root,
			false,
			$path . '->root:\\JCG\\Test\\generated\\Type\\JsonNumberEnum'
		);
		$o->sibling = \JCG\Test\generated\Assert\parent\sibling\AssertJsonNumberEnum::assert(
			$o->sibling,
			false,
			$path . '->sibling:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonNumberEnum'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnumMixedTest $result */
		$result = $o;
		return $result;
	}
}
