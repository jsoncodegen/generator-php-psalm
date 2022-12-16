<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonStringEnumValueMixedTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueMixedTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueMixedTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueMixedTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueMixedTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnumValueMixedTest, got $type (at $path)"
			);
		}
		$o->child = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\child\JsonStringEnum::Name,
			$o->child,
			false,
			$path . '->child:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonStringEnum:Name'
		);
		$o->local = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\JsonStringEnum::Name,
			$o->local,
			false,
			$path . '->local:\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonStringEnum:Name'
		);
		$o->parent = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\JsonStringEnum::Name,
			$o->parent,
			false,
			$path . '->parent:\\JCG\\Test\\generated\\Type\\parent\\JsonStringEnum:Name'
		);
		$o->root = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\JsonStringEnum::Name,
			$o->root,
			false,
			$path . '->root:\\JCG\\Test\\generated\\Type\\JsonStringEnum:Name'
		);
		$o->sibling = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name,
			$o->sibling,
			false,
			$path . '->sibling:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum:Name'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonStringEnumValueMixedTest $result */
		$result = $o;
		return $result;
	}
}
