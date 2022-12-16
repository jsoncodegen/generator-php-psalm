<?php

namespace JCG\Test\generated\Assert\parent\sibling;

final class AssertJsonStringEnum
{
	const __VALUES__ = [
		\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::Name,
		\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameWithDescription,
		\JCG\Test\generated\Type\parent\sibling\JsonStringEnum::NameOfEmptyValue
	];

	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\parent\sibling\JsonStringEnum|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum') {
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\parent\\sibling\\JsonStringEnum';
		/** @var \JCG\Test\generated\Type\parent\sibling\JsonStringEnum|null $result */
		$result = \JCG\Test\generated\Util\AssertUtil::assertStringEnumValue(
			self::__VALUES__,
			$o,
			$isNullable,
			$path
		);
		return $result;
	}
}
