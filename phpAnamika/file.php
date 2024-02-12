<?php
$filename = "bim.txt";
$fp = fopen($filename, "w");
$content = "Hello, World!";
fwrite($fp, $content);
fclose($fp);
echo "writing process is completed<br>";
$fp = fopen($filename, "r");
$content = fread($fp, filesize($filename));
fclose($fp);
echo "content read from the file: " . $content;
?>