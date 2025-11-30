<?php
$myfile = fopen("https://en.wikipedia.org/w/index.php?title=Pet_door&action=raw", "r") or die("Unable to open file!");
echo fread($myfile,filesize("https://en.wikipedia.org/w/index.php?title=Pet_door&action=raw"));
fclose($myfile);
?>