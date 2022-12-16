<?php

try {
	$start = microtime(true);
	
	echo "Removing build...\n";
	rimraf('build');
	
	echo "Creating build...\n";
	mkdir('build');
	
	if (count($argv) > 1 && $argv[1] === 'debug') {
		$srcPath = not_false(realpath('src'));
		$srcLinkPath = not_false(realpath('build')) . DIRECTORY_SEPARATOR . 'src';
		echo "Linking $srcPath → $srcLinkPath...\n";
		symlink_or_junct($srcPath, $srcLinkPath);
		
		$vendorPath = not_false(realpath('vendor'));
		$vendorLinkPath = not_false(realpath('build')) . DIRECTORY_SEPARATOR . 'vendor';
		echo "Linking $vendorPath → $vendorLinkPath...\n";
		symlink_or_junct($vendorPath, $vendorLinkPath);
	} else {
		echo "Copying src...\n";
		copy_recursive('src', 'build' . DIRECTORY_SEPARATOR . 'src');
	}
	
	echo "Creating index.php...\n";
	$indexStr = <<<EOS
<?php
require 'src/autoload.php';
Ovitas\PsalmTest\Main::main();
EOS;
	file_put_contents('build' . DIRECTORY_SEPARATOR . 'index.php', $indexStr, LOCK_EX);
	
	$time = microtime(true) - $start;
	echo "Done in $time s.\n";
} catch (Exception $e) {
	error_log($e->getTraceAsString());
	die(1);
}

/**
 * @param string $dir
 * @param bool $isRealPath
 * @return void
 * @throws Exception
 */
function rimraf($dir, $isRealPath = false)
{
	if (!$isRealPath) {
		$dir = not_false(realpath($dir));
	}
	if (file_exists($dir)) {
		$list = not_false(scandir($dir, SCANDIR_SORT_NONE));
		foreach ($list as $file) {
			if ($file === '.' || $file === '..') continue;
			$fileFullPath = $dir . DIRECTORY_SEPARATOR . $file;
			if (is_file($fileFullPath)) {
				echo "    Deleting file $fileFullPath...\n";
				not_false(unlink($fileFullPath));
			} elseif (is_link($fileFullPath) || $fileFullPath !== realpath($fileFullPath)) {
				echo "    Deleting link $fileFullPath...\n";
				not_false(rmdir($fileFullPath));
			} else {
				rimraf($fileFullPath, true);
			}
		}
		echo "  Deleting folder $dir...\n";
		not_false(rmdir($dir));
	}
}

/**
 * @param string $source
 * @param string $dest
 * @param bool $isRealPath
 * @return void
 * @throws Exception
 */
function copy_recursive($source, $dest, $isRealPath = false)
{
	if (!$isRealPath) {
		$source = not_false(realpath($source));
		$dest = not_false(realpath(dirname($dest))) . DIRECTORY_SEPARATOR . basename($dest);
	}
	echo "  Copying folder $source → $dest...\n";
	if (!file_exists($dest)) not_false(mkdir($dest));
	$list = not_false(scandir($source, SCANDIR_SORT_NONE));
	foreach ($list as $file) {
		if ($file === '.' || $file === '..') continue;
		$fileFullPath = $source . DIRECTORY_SEPARATOR . $file;
		$destFullPath = $dest . DIRECTORY_SEPARATOR . $file;
		if (is_file($fileFullPath)) {
			echo "    Copying file $fileFullPath → $fileFullPath...\n";
			not_false(copy($fileFullPath, $destFullPath));
		} elseif (is_link($fileFullPath) || $fileFullPath !== realpath($fileFullPath)) {
			echo "  Ignoring link $fileFullPath...\n";
		} else {
			copy_recursive($fileFullPath, $destFullPath, true);
		}
	}
}

/**
 * @template T
 * @param T|false $it
 * @return T
 * @throws Exception
 */
function not_false($it)
{
	if ($it === false) throw new Exception('[rmn7x1] Unexpected false');
	return $it;
}

/**
 * @template T
 * @param T|null $it
 * @return T
 * @throws Exception
 */
function not_null($it)
{
	if ($it === null) throw new Exception('[rmrz0t] Unexpected null');
	return $it;
}

/**
 * @param string $src
 * @param string $target
 * @return void
 * @throws Exception
 */
function symlink_or_junct($src, $target)
{
	if (is_windows()) {
		/** @psalm-suppress ForbiddenCode */
		not_null(not_false(shell_exec("mklink /J $target $src")));
	} else {
		not_false(symlink($src, $target));
	}
}

/**
 * @return bool
 */
function is_windows()
{
	return stripos(PHP_OS, 'WIN') === 0;
}