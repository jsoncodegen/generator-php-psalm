<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonNumberEnumValueMixedTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonNumberEnumValueMixedTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumValueMixedTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumValueMixedTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumValueMixedTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnumValueMixedTest, got $type (at $path)"
			);
		}
		$o->child = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\child\JsonNumberEnum::Name,
			$o->child,
			false,
			$path . '->child:\\JCG\\Test\\generated\\Type\\parent\\tests\\child\\JsonNumberEnum:Name'
		);
		$o->local = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\tests\JsonNumberEnum::Name,
			$o->local,
			false,
			$path . '->local:\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonNumberEnum:Name'
		);
		$o->parent = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\JsonNumberEnum::Name,
			$o->parent,
			false,
			$path . '->parent:\\JCG\\Test\\generated\\Type\\parent\\JsonNumberEnum:Name'
		);
		$o->root = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\JsonNumberEnum::Name,
			$o->root,
			false,
			$path . '->root:\\JCG\\Test\\generated\\Type\\JsonNumberEnum:Name'
		);
		$o->sibling = \JCG\Test\generated\Util\AssertUtil::assertExactValue(
			\JCG\Test\generated\Type\parent\sibling\JsonNumberEnum::Name,
			$o->sibling,
			false,
			$path . '->sibling:\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonNumberEnum:Name'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonNumberEnumValueMixedTest $result */
		$result = $o;
		return $result;
	}
}
