<html>
<head>
<style>
form {
    background-color: #dcf8fc;
    padding: 50px 100px;
}
.form-block {
    display: flex;
    padding: 10px 20px;
}
.form-block span {
    flex-basis: 50%;
}
.form-block input[type="text"],
.form-block input[type="textbox"],
.form-block input[type="number"] {
    flex-basis: 50%;
    border: none;
    padding: 5px 10px;
}
.form-block input[type="submit"] {
    padding: 10px 20px;
    border-color: rgba(0,0,0,0.7);
    background-color: rgba(255,255,255,1);
    border-radius: 10px;
}
.form-block input[type="submit"]:hover {
    background-color: rgba(255,255,255,0.5);
}
h3 {
    text-align: center;
}
h3 span {
    border-bottom: 1px solid black;
}
</style>
</head>

<body>

<h3><span> Update Book </span></h3>
<?php
    $bookID = $_POST["bookID"];
    require_once 'books-modify.php';
    $modifyBook = new ModifyBooks();
    $fetchedBook = $modifyBook ->FetchBook ($bookID);
?>

<form action="update_book_action.php" method="post">
    <div class="form-block">
        <span>Book Title: </span><input type="text" name="title" placeholder="<?php echo ''.$fetchedBook["Name"].'';?>">
    </div>
    <div class="form-block">
        <span>Book Summary: </span><input type="textbox" name="summary" placeholder="<?php echo ''.$fetchedBook["Summary"].'';?>">
    </div>
    <div class="form-block">
        <span>Book Author: </span><input type="text" name="author" placeholder="<?php echo ''.$fetchedBook["Author"].'';?>">
    </div>
    <div class="form-block">
        <span>Book Publisher: </span> <input type="text" name="publisher" placeholder="<?php echo ''.$fetchedBook["Publisher"].'';?>">
    </div>
    <div class="form-block">
        <span>Book Price: </span> <input type="number" name="price" placeholder="<?php echo ''.$fetchedBook["Price"].'';?>">
    </div>
    <div class="form-block">
        <input type="hidden" name="bookID" value=<?php echo ''.$_POST["bookID"].''?> >
        <input type="submit" value="Update Book">
    </div>
</form>'

</body>
</html>