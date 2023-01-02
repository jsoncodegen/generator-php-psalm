<?php

namespace JCG\Test\generated\Type;

/**
 * @psalm-type JsonStringEnumType = "Value"|"ValueWithDescription"|""
 */

/**
 * This is a string enum.
 */
abstract class JsonStringEnum
{
	const Name = "Value";

	/**
	 * This is a value.
	 */
	const NameWithDescription = "ValueWithDescription";
	const NameOfEmptyValue = "";
}