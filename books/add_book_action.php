<?php
$name = $_POST["name"];
$summary = $_POST["summary"];
$author = $_POST["author"];
$publisher = $_POST["publisher"];
$price = $_POST["price"];

$flag = true;

if($name == '' || $summary == '' || $author == '' || $publisher == '' || $price == '') {
 $flag = false;
}

if($flag == true ){
    require_once 'books-modify.php';
    $modifyBook = new ModifyBooks();
    $modifyBook ->AddBook ($name, $summary, $author, $publisher , $price);
}
?>
