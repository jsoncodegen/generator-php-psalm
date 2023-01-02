export function templateOfEnum({
	namespaceDecl,
	typeDecl,
	comment,
	enumName,
	enumValueDeclarations,
}: {
	namespaceDecl: string
	typeDecl: string
	comment: string
	enumName: string
	enumValueDeclarations: string
}) {
	return `<?php

${namespaceDecl}

${typeDecl}

${comment}
abstract class ${enumName}
{
${enumValueDeclarations}
}`
}
