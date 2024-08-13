<?php 
$file = fopen("books4.csv","r");
while($line = fgetcsv($file)){
    print_r($line);
}
