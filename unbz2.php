<?php
$file=fopen(__DIR__ . "/base.nav", "r");
$file_size=filesize(__DIR__ . "/base.nav");

Header("Content-type: application/octet-stream"); 
Header("Accept-Ranges: bytes"); 
Header("Accept-Length:".$file_size); 
Header("Content-Disposition: attachment; filename=".$_GET['nav'].".nav"); 

echo fread($file, $file_size);
fclose($file);
?>