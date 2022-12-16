<?php

namespace JCG\Test\generated\Assert\parent\sibling;

final class AssertJsonInterface
{
	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\sibling\JsonInterface|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonInterface')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonInterface';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \Exception("Expected \\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonInterface, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \Exception(
				"Expected \\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonInterface, got $type (at $path)"
			);
		}

		/** @var \JCG\Test\generated\Type\parent\sibling\JsonInterface $result */
		$result = $o;
		return $result;
	}
}
