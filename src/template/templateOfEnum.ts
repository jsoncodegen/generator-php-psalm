export function templateOfEnum({
	namespaceDecl,
	comment,
	enumName,
	enumValueDeclarations,
}: {
	namespaceDecl: string
	comment: string
	enumName: string
	enumValueDeclarations: string
}) {
	return `<?php

${namespaceDecl}

${comment}
abstract class ${enumName}
{
${enumValueDeclarations}
}`
}
