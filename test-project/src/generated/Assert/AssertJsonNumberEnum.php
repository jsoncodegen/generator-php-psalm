<?php

namespace JCG\Test\generated\Assert;

final class AssertJsonNumberEnum
{
	const __VALUES__ = [
		\JCG\Test\generated\Type\JsonNumberEnum::Name,
		\JCG\Test\generated\Type\JsonNumberEnum::NameWithDescription,
		\JCG\Test\generated\Type\JsonNumberEnum::NameOfFractionValue
	];

	/**
	 * @param mixed $o
	 * @param ?bool $isNullable
	 * @param ?string $path
	 * @return \JCG\Test\generated\Type\JsonNumberEnum::Name|\JCG\Test\generated\Type\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\JsonNumberEnum::NameOfFractionValue|null
	 * @throws \Exception
	 */
	public static function assert($o, $isNullable = false, $path = '\\JCG\\Test\\generated\\Type\\JsonNumberEnum') {
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '\\JCG\\Test\\generated\\Type\\JsonNumberEnum';
		/** @var \JCG\Test\generated\Type\JsonNumberEnum::Name|\JCG\Test\generated\Type\JsonNumberEnum::NameWithDescription|\JCG\Test\generated\Type\JsonNumberEnum::NameOfFractionValue|null $result */
		$result = \JCG\Test\generated\Util\AssertUtil::assertNumberEnumValue(
			self::__VALUES__,
			$o,
			$isNullable,
			$path
		);
		return $result;
	}
}
