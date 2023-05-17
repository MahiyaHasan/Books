<?php
$bookID = $_POST["bookID"];
$name = $_POST["title"];
$summary = $_POST["summary"];
$author = $_POST["author"];
$publisher = $_POST["publisher"];
$price = $_POST["price"];

require_once 'books-modify.php';
$modifyBook = new ModifyBooks();
$fetchedBook = $modifyBook ->FetchBook ($bookID);


$fetchedBookName = $fetchedBook["Name"];
$fetchedBookSummary = $fetchedBook["Summary"];
$fetchedBookAuthor = $fetchedBook["Author"];
$fetchedBookPublisher = $fetchedBook["Publisher"];
$fetchedBookPrice = $fetchedBook["Price"];

$flag = true;


if($name == '' && $summary == '' && $author == '' && $publisher == '' && $price =='') {
   $flag = false;
}
if ($name == '')
{
    $name = $fetchedBookName;
}
if ($summary == '')
{
    $summary = $fetchedBookSummary;
}
if ($author == '')
{
    $author = $fetchedBookAuthor;
}
if ($publisher == '')
{
    $publisher = $fetchedBookPublisher;
}
if ($price == '')
{
    $price = $fetchedBookPrice;
}

if($flag == true ){
	require_once 'books-modify.php';
    $modifyBook = new ModifyBooks();
    $modifyBook ->UpdateBook ($name, $summary, $author, $publisher , $price, $bookID);
}
?>
