<?php 
//use spl to read csv
$file = new SplFileObject("books.csv");
$file->setFlags(SplFileObject::READ_CSV);
$file->setCsvControl(",");
$price = 0;
foreach($file as $row){
    echo $row[0]. " - ". $row[1]. " - ". $row[2]. PHP_EOL;
    $price += $row[2];
}
echo "Total price = {$price}";