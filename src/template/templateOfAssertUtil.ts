export function templateOfAssertUtil({ namespace }: { namespace: string }) {
	return `<?php

namespace ${namespace};

class AssertUtil
{
	/**
	 * @param mixed $it
	 * @param ?int $maxLevel
	 * @return string
	 */
	public static function stringify($it, $maxLevel = 3)
	{
		$type = gettype($it);
		switch ($type) {
			case 'NULL':
				return 'null';
			case 'boolean':
				return $it ? 'true' : 'false';
			case 'string':
				$str = json_encode($it);
				return $str === false ? '"<one weird string>"' : $str;
			case 'double':
			case 'integer':
				return "$it";
			case 'object':
				$class = get_class($it);
				return "{object $class}";
			case 'array':
				if ($maxLevel > 0) {
					$isFirst = true;
					$isList = true;
					$lastKey = -1;
					$list = '';
					$map = '';
					/** @var mixed $value */
					foreach ($it as $key => $value) {
						if (is_int($key) && $lastKey + 1 === $key) {
							$lastKey = $key;
						} else {
							$isList = false;
						}
						if ($isList) {
							if (!$isFirst) {
								$list .= ', ';
							}
							$list .= self::stringify($value, $maxLevel - 1);
						}
						if (!$isFirst) {
							$map .= ', ';
						}
						$map .= self::stringify($key, $maxLevel - 1) . ' => ' . self::stringify($value, $maxLevel - 1);
						$isFirst = false;
					}
					return '[' . ($isList ? $list : $map) . ']';
				} else {
					return '[array]';
				}
			default:
				return $type;
		}
	}
	
	/**
	 * @param mixed $value
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertBoolean($value, $isNullable = false, $path = '')
	{
		if ($value === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected boolean, got null (at $path)");
			}
		}
		if (!is_bool($value)) {
			$valueStr = self::stringify($value);
			throw new \\Exception(
				"Expected boolean, got $valueStr (at $path)"
			);
		}
		return $value;
	}
	
	/**
	 * @param mixed $value
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertNumber($value, $isNullable = false, $path = '')
	{
		if ($value === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected number, got null (at $path)");
			}
		}
		if (!is_int($value) && !is_float($value)) {
			$valueStr = self::stringify($value);
			throw new \\Exception(
				"Expected number, got $valueStr (at $path)"
			);
		}
		return $value;
	}
	
	/**
	 * @param mixed $value
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertString($value, $isNullable = false, $path = '')
	{
		if ($value === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected string, got null (at $path)");
			}
		}
		if (!is_string($value)) {
			$valueStr = self::stringify($value);
			throw new \\Exception(
				"Expected string, got $valueStr (at $path)"
			);
		}
		return $value;
	}
	
	/**
	 * @param mixed $expected
	 * @param mixed $actual
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertExactValue($expected, $actual, $isNullable = false, $path = '')
	{
		if ($actual === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected $expected, got null (at $path)");
			}
		}
		if ($actual !== $expected) {
			$expectedStr = self::stringify($expected);
			$actualStr = self::stringify($actual);
			throw new \\Exception(
				"Expected $expectedStr, got $actualStr (at $path)"
			);
		}
		return $actual;
	}
	
	/**
	 * @param list<int|float> $expected
	 * @param mixed $actual
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertNumberEnumValue($expected, $actual, $isNullable = false, $path = '')
	{
		if ($actual === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected number enum, got null (at $path)");
			}
		}
		if (!is_int($actual) && !is_float($actual) || !in_array($actual, $expected, true)) {
			$actualStr = self::stringify($actual);
			throw new \\Exception(
				"Expected number enum, got $actualStr (at $path)"
			);
		}
		return $actual;
	}
	
	/**
	 * @param list<string> $expected
	 * @param mixed $actual
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertStringEnumValue($expected, $actual, $isNullable = false, $path = '')
	{
		if ($actual === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected string enum, got null (at $path)");
			}
		}
		if (!is_string($actual) || !in_array($actual, $expected, true)) {
			$actualStr = self::stringify($actual);
			throw new \\Exception(
				"Expected string enum, got $actualStr (at $path)"
			);
		}
		return $actual;
	}
	
	/**
	 * @param callable(mixed,string=):mixed $assertItem
	 * @param mixed $value
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertArray($assertItem, $value, $isNullable = false, $path = '')
	{
		if (is_null($path)) $path = '';
		if ($value === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected array, got null (at $path)");
			}
		}
		if (is_array($value)) {
			$lastKey = -1;
			/** @var mixed $item */
			foreach ($value as $key => $item) {
				if (is_int($key) && $key === $lastKey + 1) {
					$lastKey = $key;
					/** @psalm-suppress MixedAssignment */
					$value[$key] = $assertItem($item, $path . "[$key]");
				} else {
					$valueStr = self::stringify($value);
					throw new \\Exception(
						"Expected array, got $valueStr (at $path)"
					);
				}
			}
		} else {
			$valueStr = self::stringify($value);
			throw new \\Exception(
				"Expected array, got $valueStr (at $path)"
			);
		}
		return $value;
	}
	
	/**
	 * @param callable(mixed,string=):mixed $assertItem
	 * @param mixed $value
	 * @param bool $isNullable
	 * @param ?string $path
	 * @return mixed
	 * @throws \\Exception
	 */
	public static function assertMap($assertItem, $value, $isNullable = false, $path = '')
	{
		if (is_null($path)) $path = '';
		if ($value === null) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected map, got null (at $path)");
			}
		}
		if ($value instanceof \\stdClass) $value = (array)$value;
		if (is_array($value)) {
			/** @var mixed $item */
			foreach ($value as $key => $item) {
				if (is_string($key)) {
					/** @psalm-suppress MixedAssignment */
					$value[$key] = $assertItem($item, $path . ".$key");
				} else {
					$valueStr = self::stringify($value);
					throw new \\Exception(
						"Expected map, got $valueStr (at $path)"
					);
				}
			}
		} else {
			$valueStr = self::stringify($value);
			throw new \\Exception(
				"Expected map, got $valueStr (at $path)"
			);
		}
		/** @var array<string, mixed> $result */
		$result = $value;
		return new JsonMap($result);
	}
	
	/**
	 * @param mixed $obj
	 * @param list<string> $expected
	 * @param ?string $path
	 * @return void
	 */
	public static function assertFieldsIn($obj, $expected, $path = '') {
		/**
		 * @var mixed $key
		 * @var mixed $value
		 */
		foreach ($obj as $key => $value) {
			if (!in_array($key, $expected)) {
				throw new \\Exception("Unexpected field $key (at $path)");
			}
		}
	}
}
`
}
