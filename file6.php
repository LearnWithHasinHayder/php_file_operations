<?php 
// $books = "Book 1\nBook \nBook3";
$books = <<<EOD
Book 4
Book 5
Book 6

EOD;

file_put_contents("books2.txt", $books, FILE_APPEND);
echo "Done";