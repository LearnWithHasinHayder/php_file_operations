<?php 
include "vendor/autoload.php";
use League\Csv\Reader;
$price = 0;
$reader = Reader::createFromPath("books2.csv","r");
$reader->setHeaderOffset(0);
$books = $reader->getRecords();
foreach($books as $book){
    $output = "Book Name = {$book['Title']}, Author = {$book['Author']}".PHP_EOL;
    echo $output;
    $price += $book['Price'];
}

echo "Total price = {$price}";