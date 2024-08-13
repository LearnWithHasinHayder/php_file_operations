<?php 
$file = fopen("data.txt","a"); //file handle

$data = "Hello from Ostad Again Again\n";
$data = "Hello from Ostad Again Again".PHP_EOL;
fwrite($file,$data);
echo "Done";
fclose($file);