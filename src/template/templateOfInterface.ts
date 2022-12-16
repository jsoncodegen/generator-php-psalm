export function templateOfInterface({
	namespaceDecl,
	comment,
	interfaceName,
	fieldDeclarations,
	builderGenericsAllOk,
	variables,
	validations,
	copyValuesFromBuilder,
}: {
	namespaceDecl: string
	comment: string
	interfaceName: string
	fieldDeclarations: string
	builderGenericsAllOk: string
	variables: string
	validations: string
	copyValuesFromBuilder: string
}) {
	return `<?php

${namespaceDecl}

${comment}
final class ${interfaceName}
{
${fieldDeclarations}

	/**
	 * @param ${builderGenericsAllOk} $builder
	 * @throws \\Exception
	 */
	public function __construct($builder)
	{
${variables}
		
${validations}
		
${copyValuesFromBuilder}
	}
}`
}
