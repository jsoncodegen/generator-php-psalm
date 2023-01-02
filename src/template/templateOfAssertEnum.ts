export function templateOfAssertEnum({
	enumName,
	enumAlias,
	enumType,
	assertFunAlias,
	values,
	comment,
	namespace,
}: {
	enumName: string
	enumAlias: string
	enumType: string
	assertFunAlias: string
	values: string
	comment: string
	namespace: string
}) {
	return `<?php

namespace ${namespace};

final class Assert${enumName}
{
	const __VALUES__ = ${values}

${comment}
	public static function assert($o, $isNullable = false, $path = '${enumAlias.replace(
		/\\/g,
		'\\\\',
	)}') {
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '${enumAlias.replace(/\\/g, '\\\\')}';
		/** @var ${enumType}|null $result */
		$result = ${assertFunAlias}(
			self::__VALUES__,
			$o,
			$isNullable,
			$path
		);
		return $result;
	}
}
`
}
