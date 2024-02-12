<?php
$filename = "bim.txt";
$wcontent = "This is a test content.";
if(file_put_contents($filename, $wcontent)!== false){
    echo "Data successfully written to the file.<br>";
}else{
    echo "Failed to write data to the file.<br>";
}
$rcontent = file_get_contents($filename);
echo "Data read from the file: " . $rcontent . "<br>";
?>