<?php
/**
 * @author haohx@pamysoft.com
 * @Copyright by Pamysoft.com
 */

// self remove
$remove = $_GET['remove'];
if ($remove==1) {
	@unlink(__FILE__);
	echo __FILE__ .' has been removed.';
	exit;
}

// keyword
$keyword = $_GET['keyword'];
$keyword = preg_quote($keyword,'/#');
if (!isset($keyword) || empty($keyword)) {
	$filename = basename(__FILE__);
	$syntax = <<<EOD
	<strong>USAGE: </strong>$filename?keyword=[search text pattern]&dir=[search from sub folder name, default: .]&extensions=[file extensions separated by commas character, default: php,js,css,html,phtml]<br/>
	<strong>Ex: </strong><br/>
	<ol>
			<li>$filename?keyword=Pamysoft&extensions=php,js,css,html,phtml,tpl</li>
			<li>$filename?keyword=Pamysoft&dir=/subdir</li>
	</ol>
EOD;

	echo $syntax;
	exit;
}
// extensions
$extensions = $_GET['extensions'];
if (!isset($extensions)) {
	$extensions = 'php,js,css,html,phtml,tpl,xml';
}

// dir
$dir = $_GET['dir'];
if (!isset($dir)) {
	$dir = '.';
}

$conditionHtml = <<<EOD
	<h1>Pamysoft Grep</h1>
	<strong>Keyword: </strong>$keyword<br />
	<strong>Extensions: </strong>$extensions<br />
	<strong>Dir: </strong>$dir<hr/>
EOD;

// do search
$directory_path = dirname(__FILE__).DIRECTORY_SEPARATOR.$dir;
$extensions = explode(',', $extensions);
$files = findFiles($keyword, $directory_path, $extensions);
if (count($files)>0) {
	$html = sprintf('<strong>Result: </strong>%s found files<br/>', count($files));
	foreach ($files as $filepath => $postions)
	{
		$html .= writePostion($filepath, $postions);
	}

} else {
	$html = 'Result: Not found!';
}

// ** output
// condition
echo $conditionHtml;
// data
echo $html;

/**
 * writePostion
 * @param string $filepath
 * @param array $postions
 */
function writePostion($filepath, $postions)
{
	$posHtml = '';
	foreach ($postions as $line => $context)
	{
		$posHtml .= sprintf('<li><strong>Line %s</strong>: %s</li>', $line+1, htmlspecialchars($context));
	}

	$html = <<<EOD
	<strong>File: </strong>$filepath
	<ol>
		$posHtml
	</ol>
EOD;

	return $html;
}

/**
 * findFiles
 * @param string $keyword
 * @param string $directory_path
 * @return array:
 */
function findFiles($keyword, $directory_path, $extensions)
{
	$files = array();
	$dir_iterator = new RecursiveDirectoryIterator($directory_path);
	$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);
	// could use CHILD_FIRST if you so wish

	foreach ($iterator as $filepath => $file) {
		if (!$file->isFile()) continue; // skip directory
		if (strcmp($filepath, __FILE__)==0) continue; // skip this file

		if (method_exists($file, 'getExtension')) {
			if (!in_array($file->getExtension(), $extensions)) continue; // filter file extensions
		} else {
			//continue;
		}

		if (loadKeywordPositions($keyword, $filepath, $positions)) {
			$filepath = str_replace($directory_path, '.'.DIRECTORY_SEPARATOR, $filepath);
			$files[$filepath] = $positions;
		}
	}

	return $files;
}

function loadKeywordPositions($keyword, $filepath, &$positions)
{
	$pattern = "/$keyword/";
	$input = file($filepath);
	$positions = preg_grep($pattern, $input);

	return count($positions);
}