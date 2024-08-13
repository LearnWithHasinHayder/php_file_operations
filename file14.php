<?php 
$exists = file_exists("unwanted.txt");
if($exists){
    unlink("unwanted.txt");
}