<?php

namespace JCG\Test\generated\Assert\parent\tests;

final class AssertJsonInterfaceMixedTest
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\tests\JsonInterfaceMixedTest|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceMixedTest')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceMixedTest';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceMixedTest, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\tests\\JsonInterfaceMixedTest, got $type (at $path)"
			);
		}
		\JCG\Test\generated\Util\AssertUtil::assertFieldsIn($o, ["child","local","parent","root","sibling"], $path);
		$o->child = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
			(isset($o->child) ? $o->child : null),
			false,
			$path . '->child'
		);
		$o->local = \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
			(isset($o->local) ? $o->local : null),
			false,
			$path . '->local'
		);
		$o->parent = \JCG\Test\generated\Assert\parent\AssertJsonInterface::assert(
			(isset($o->parent) ? $o->parent : null),
			false,
			$path . '->parent'
		);
		$o->root = \JCG\Test\generated\Assert\AssertJsonInterface::assert(
			(isset($o->root) ? $o->root : null),
			false,
			$path . '->root'
		);
		$o->sibling = \JCG\Test\generated\Assert\parent\sibling\AssertJsonInterface::assert(
			(isset($o->sibling) ? $o->sibling : null),
			false,
			$path . '->sibling'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonInterfaceMixedTest $result */
		$result = $o;
		return $result;
	}
}
