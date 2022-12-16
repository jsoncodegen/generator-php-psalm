export function templateOfImport({
	alias,
	path,
}: {
	alias: string
	path: string
}) {
	return `use ${JSON.stringify(path)} as ${alias};`
}
