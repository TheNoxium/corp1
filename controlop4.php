<?php
$myfile = fopen("txt/out-4.txt", "w") or die("Unable to open file!");
$txt = "1\n";
fwrite($myfile, $txt);
fclose($myfile);
?>