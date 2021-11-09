<?
function print_p($d) {
	echo "<pre>",print_r($d),"</pre>";

}

function file_get_json($filename){
	$file = file_get_contents($filename);
	return json_decode($file);
}


?>