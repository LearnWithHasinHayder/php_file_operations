<?php 
$books = [
    "book 1",
    "book 2",
    "book 3",
    "book 4",
    "book 5",
];

$file = fopen("books.txt","w");
foreach($books as $book){
    fwrite($file,$book.PHP_EOL);
}