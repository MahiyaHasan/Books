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
        <h3><span>Add New Book</span></h3>
        <form action="add_book_action.php" method="post">
            <div class="form-block">
                <span>Book Title: </span><input type="text" name="name">
            </div>
            <div class="form-block">
                <span>Book Summary: </span><input type="textbox" name="summary">
            </div>
            <div class="form-block">
                <span>Book Author: </span><input type="text" name="author">
            </div>
            <div class="form-block">
                <span>Book Publisher: </span> <input type="text" name="publisher">
            </div>
            <div class="form-block">
                <span>Book Price: </span> <input type="number" name="price">
            </div>
            <div class="form-block">
                <input type="submit" value="Add New Book">
            </div>
        </form>
    </body>
</html>