<?php 
$books = [
    ["To Kill a Mockingbird", "Harper Lee", 12.99],
    ["The Lord of the Rings", "J.R.R. Tolkien", 15.99],
    ["The Hunger Games", "Suzanne Collins", 10.99],
    ["Pride and Prejudice", "Jane Austen", 8.99],
    ["The Catcher in the Rye", "J.D. Salinger", 11.99],
    ["The Hitchhiker's Guide to the Galaxy", "Douglas Adams", 9.99],
    ["The Handmaid's Tale", "Margaret Atwood", 14.99],
    ["The Nightingale", "Kristin Hannah", 13.99],
    ["The Power", "Naomi Alderman", 12.99],
    ["The Immortal Life of Henrietta Lacks", "Rebecca Skloot", 16.99],
];
// $_books = [];
// foreach($books as $book){
//    $line = implode(", ", $book);
//    $_books[] = $line;
// }
// $data = implode(PHP_EOL,$_books);
// file_put_contents("books3.csv",$data);

$file = fopen("books4.csv","w");
foreach($books as $book){
    fputcsv($file,$book);
}