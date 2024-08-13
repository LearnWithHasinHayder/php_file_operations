<?php 
//read the books
// $file = fopen("books.txt","r");
// while(!feof($file)){
//     echo fgets($file);
// }

$file = file("books.txt");
foreach($file as $line){
    echo $line;
}

echo "Total books count ". count($file);