<html>
<head>
<style>
tr:nth-child(odd) {
    background-color: #d2f8f6;
}
tr:nth-child(even) {
    background-color: #fffce9
}
th,td {
    padding: 10px 20px;
    text-align: center;
}
input[type="submit"] {
    padding: 10px 20px;
    border-color: rgba(0,0,0,0.7);
    background-color: rgba(255,255,255,1);
    border-radius: 10px;
}
input[type="submit"]:hover {
    background-color: rgba(255,255,255,0.5);
}
</style>
</head>

<body>
    <table>
        <tr>
            <th> Book ID </th>
            <th> Name </th>
            <th> Summary </th>
            <th> Author </th>
            <th> Publisher </th>
            <th> Price </th>
            <th> Update Record </th>
            <th> Delete Record </th>
        </tr>
    <?php
    require_once 'books-modify.php';
    $modifyBook = new ModifyBooks();
    $modifyBook ->ShowAllBooks ();
    ?>
    </table> 
</body>
</html>


