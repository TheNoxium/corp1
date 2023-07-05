<?php
$myfile = fopen("txt/out-1.txt", "w") or die("Unable to open file!");
$txt = "0\n";
fwrite($myfile, $txt);
fclose($myfile);
?>