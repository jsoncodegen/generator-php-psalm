import { indent } from '../fun/indent'

export function templateOfAssertInterface({
	assertions,
	interfaceName,
	interfaceAlias,
	comment,
	namespace,
}: {
	assertions: string
	interfaceName: string
	interfaceAlias: string
	comment: string
	namespace: string
}) {
	return `<?php

namespace ${namespace};

final class Assert${interfaceName}
{
${comment}
	public static function assert($o, $isNullable = false, $path = '${interfaceAlias.replace(
		/\\/g,
		'\\\\',
	)}')
	{
		if (is_null($isNullable)) $isNullable = false;
		if (is_null($path)) $path = '${interfaceAlias.replace(/\\/g, '\\\\')}';
		if (is_null($o)) {
			if ($isNullable) {
				return null;
			} else {
				throw new \\Exception("Expected ${interfaceAlias.replace(
					/\\/g,
					'\\\\',
				)}, got null (at $path)");
			}
		}
		if (!is_object($o)) {
			$type = gettype($o);
			throw new \\Exception(
				"Expected ${interfaceAlias.replace(/\\/g, '\\\\')}, got $type (at $path)"
			);
		}
${indent(indent(assertions))}
		/** @var ${interfaceAlias} $result */
		$result = $o;
		return $result;
	}
}
`
}
