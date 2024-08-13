<?php 
include "vendor/autoload.php";
use League\Csv\Reader;
$price = 0;
$reader = Reader::createFromPath("books.csv","r");
$books = $reader->getRecords();
foreach($books as $book){
    $output = "Book Name = {$book[0]}, Author = {$book[1]}".PHP_EOL;
    // echo $output;
    $price += $book[2];
}

echo "Total price = {$price}";