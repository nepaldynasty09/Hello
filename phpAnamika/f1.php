<?php
$filename = "coding.txt";
$fp = fopen($filename, "w");
$content = "coding in PHP";
fwrite($fp, $content);
fclose($fp);
echo "Anamika wrote content in " .$filename. " successfully";
?>