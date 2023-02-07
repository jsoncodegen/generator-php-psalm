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
		\JCG\Test\generated\Util\AssertUtil::assertFieldsIn($o, ["child","local","parent","root","sibling"], $path);
		$o->child = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonStringEnum::assert(
			(isset($o->child) ? $o->child : null),
			false,
			$path . '->child:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonStringEnum'
		);
		$o->local = \JCG\Test\generated\Assert\parent\tests\AssertJsonStringEnum::assert(
			(isset($o->local) ? $o->local : null),
			false,
			$path . '->local:\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnum'
		);
		$o->parent = \JCG\Test\generated\Assert\parent\AssertJsonStringEnum::assert(
			(isset($o->parent) ? $o->parent : null),
			false,
			$path . '->parent:\\JCG\\Test\\generated\\Type\\parent\\JsonStringEnum'
		);
		$o->root = \JCG\Test\generated\Assert\AssertJsonStringEnum::assert(
			(isset($o->root) ? $o->root : null),
			false,
			$path . '->root:\\JCG\\Test\\generated\\Type\\JsonStringEnum'
		);
		$o->sibling = \JCG\Test\generated\Assert\parent\sibling\AssertJsonStringEnum::assert(
			(isset($o->sibling) ? $o->sibling : null),
			false,
			$path . '->sibling:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumMixedTest $result */
		$result = $o;
		return $result;
	}
}
