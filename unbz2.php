<?php
$file=fopen("d:/static/navs/base.nav", "r");
$file_size=filesize("d:/static/navs/base.nav");

Header("Content-type: application/octet-stream"); 
Header("Accept-Ranges: bytes"); 
Header("Accept-Length:".$file_size); 
Header("Content-Disposition: attachment; filename=".$_GET['nav'].".nav"); 

echo fread($file, $file_size);
fclose($file);
?>