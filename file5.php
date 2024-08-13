<?php 
$content = file_get_contents("books.txt");
echo $content;

//book count
$books = explode(PHP_EOL, $content);
echo "Total books count ". count($books)-1;