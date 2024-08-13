<?php 
$books = [
    "book 6",
    "book 7",
    "book 8",
    "book 9",
    "book 10",
];

$file = fopen("books.txt","a"); //append
foreach($books as $book){
    fwrite($file,$book.PHP_EOL);
}
echo "Done";