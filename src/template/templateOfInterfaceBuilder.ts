export function templateOfInterfaceBuilder({
	namespaceDecl,
	comment,
	interfaceBuilderName,
	fieldDeclarations,
	gettersAndSetters,
}: {
	namespaceDecl: string
	comment: string
	interfaceBuilderName: string
	fieldDeclarations: string
	gettersAndSetters: string
}) {
	return `<?php

${namespaceDecl}

${comment}
final class ${interfaceBuilderName}
{
${fieldDeclarations}

${gettersAndSetters}
}`
}
