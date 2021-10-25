<?php 
$required_folder = dirname($_SERVER['PHP_SELF']);
$root = $_SERVER['DOCUMENT_ROOT'].$required-folder;

function fixURL($url) {
	$url = preg_replace(
		array('/http:\/\/[^\/]+/','/\,\./','/\/\//'),
		array('','','/'),
		$url);
	return $url;
}

function makeList($list,$title,$folder) {
	if(count($list)){
		echo "<h2>$title</h2>";
		foreach($list as $file) {
			echo "<a href='?url=".fixURL("$folder/$file")."'>$file</a><br>";
		}
	}
}

if(basename($_GET['url'])==basename($_SERVER['PHP_SELF'])){
	echo "Can't view self";
} else 
if (empty($_GET['url']) || is_dir("$root/".$_GET['url'])){
	$f = fixURL($_GET['url']);
	$folder ="$root/".$f;

	$folder =array();
	$files =array();

	if($handle = opendir($folder)) {
		while (false !==($file = readdir($handle))) {
			if($file=="." || $file==".." || $file==basename($_SERVER['PHP_SELF'])) continue;
			if(is_dir("$folder/$file")) $folders[] = $file;
			else $file[] = $file;
		}


		makeList($folders,"Folders",$f);
		makeList($files,"Files",$f);

		if(!count($folders) && !count($files)) {
			echo "No files";
		}
	}
} else
if(!file_exists("$root/".$_GET['url'])) {
	echo "Fole or folder does not exist";
} else {
	header('Content-type: text/plain');
	@readfile(fixURL("$root/" .$_GET['url']));
}





























