export function templateOfAssertEnum({
	enumName,
	enumAlias,
	assertFunAlias,
	values,
	comment,
	namespace,
}: {
	enumName: string
	enumAlias: string
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
		/** @var ${enumAlias}|null $result */
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
