<?php
    $bookID = $_POST["bookID"];
    require_once 'books-modify.php';
    $modifyBook = new ModifyBooks();
    $modifyBook ->FetchBook ($bookID);
?>
