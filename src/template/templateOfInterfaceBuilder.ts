export function templateOfInterfaceBuilder({
	namespaceDecl,
	comment,
	interfaceBuilderName,
	fieldDeclarations,
	gettersAndSetters,
	fromFn,
}: {
	namespaceDecl: string
	comment: string
	interfaceBuilderName: string
	fieldDeclarations: string
	gettersAndSetters: string
	fromFn: string
}) {
	return `<?php

${namespaceDecl}

${comment}
final class ${interfaceBuilderName}
{
${fieldDeclarations}

${gettersAndSetters}

${fromFn}
}`
}
