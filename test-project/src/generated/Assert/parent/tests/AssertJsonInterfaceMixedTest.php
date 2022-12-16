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
		$o->child = \JCG\Test\generated\Assert\parent\tests\child\AssertJsonInterface::assert(
			$o->child,
			false,
			$path . '->child'
		);
		$o->local = \JCG\Test\generated\Assert\parent\tests\AssertJsonInterface::assert(
			$o->local,
			false,
			$path . '->local'
		);
		$o->parent = \JCG\Test\generated\Assert\parent\AssertJsonInterface::assert(
			$o->parent,
			false,
			$path . '->parent'
		);
		$o->root = \JCG\Test\generated\Assert\AssertJsonInterface::assert(
			$o->root,
			false,
			$path . '->root'
		);
		$o->sibling = \JCG\Test\generated\Assert\parent\sibling\AssertJsonInterface::assert(
			$o->sibling,
			false,
			$path . '->sibling'
		);
		/** @var \JCG\Test\generated\Type\parent\tests\JsonInterfaceMixedTest $result */
		$result = $o;
		return $result;
	}
}
