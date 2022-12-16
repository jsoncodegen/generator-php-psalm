<?php
/**
 * PSR-4 autoloader based on https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
spl_autoload_register(function ($class) {
	
	// project-specific namespace prefix
	$prefix = 'JCG\\Test\\';
	
	// base directory for the namespace prefix
	$base_dir = __DIR__ . '/';
	
	// does the class use the namespace prefix?
	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len) !== 0) {
		// no, move to the next registered autoloader
		return;
	}
	
	// get the relative class name
	$relative_class = substr($class, $len);
	if ($relative_class === false) {
		// shut up psalm
		return;
	}
	
	// replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
	
	// if the file exists, require it
	if (file_exists($file)) {
		require $file;
	}
});