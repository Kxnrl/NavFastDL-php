<?php

$path = "d:/static/navs/".$_GET['nav'].".nav.bz2";

if(file_exists($path)){
	$file=fopen($path, "r");
	$file_size=filesize($path);

	Header("Content-type: application/octet-stream"); 
	Header("Accept-Ranges: bytes"); 
	Header("Accept-Length:".$file_size); 
	Header("Content-Disposition: attachment; filename=".$_GET['nav'].".nav.bz2"); 
	
	echo fread($file, $file_size);
	fclose($file);
}
else{
	copy("d:/static/navdownloader/base.nav", "d:/static/navdownloader/".$_GET['nav'].".nav");
	$filename = "d:/static/navdownloader/".$_GET['nav'].".nav";
	$filestr = file_get_contents("{$filename}");
	$bz = bzopen("{$filename}.bz2", "w");
	bzwrite($bz, $filestr);
	bzclose($bz);
	copy("d:/static/navdownloader/".$_GET['nav'].".nav.bz2", $path);
	unlink("d:/static/navdownloader/".$_GET['nav'].".nav.bz2");
	unlink("d:/static/navdownloader/".$_GET['nav'].".nav");

	$file=fopen($path, "r");
	$file_size=filesize($path);

	Header("Content-type: application/octet-stream"); 
	Header("Accept-Ranges: bytes"); 
	Header("Accept-Length:".$file_size); 
	Header("Content-Disposition: attachment; filename=".$_GET['nav'].".nav.bz2"); 
	
	echo fread($file, $file_size);
	fclose($file);
}

?>