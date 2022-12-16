<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringEnumMixedTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnumMixedTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumMixedTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumMixedTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumMixedTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumMixedTest, got $type (at $path)"
			);
		}
		$o->child = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonStringEnum::assert(
			$o->child,
			false,
			$path . '->child:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonStringEnum'
		);
		$o->local = \JCG\Test\generated\Assert\parent\tests\AssertJsonStringEnum::assert(
			$o->local,
			false,
			$path . '->local:\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnum'
		);
		$o->parent = \JCG\Test\generated\Assert\parent\AssertJsonStringEnum::assert(
			$o->parent,
			false,
			$path . '->parent:\\JCG\\Test\\generated\\Type\\parent\\JsonStringEnum'
		);
		$o->root = \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
			$o->root,
			false,
			$path . '->root:\\JCG\\Test\\generated\\Type\\JsonStringEnum'
		);
		$o->sibling = \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
			$o->sibling,
			false,
			$path . '->sibling:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumMixedTest $result */
		$result = $o;
		return $result;
	}
}
