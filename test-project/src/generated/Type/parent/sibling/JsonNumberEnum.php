<?php

namespace JCG\Test\generated\Type\parent\sibling;

/**
 * @psalm-type JsonNumberEnumType = 0|1|3.14
 */

/**
 * This is a number enum.
 */
abstract class JsonNumberEnum
{
	const Name = 0;

	/**
	 * This is a value.
	 */
	const NameWithDescription = 1;
	const NameOfFractionValue = 3.14;
}