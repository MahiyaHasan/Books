<html>
    <head>
        <style>
        tr:nth-child(odd) {
            background-color: #d2f8f6;
        }
        tr:nth-child(even) {
            background-color: #f0eab6
        }
        th,td {
            padding: 10px 20px;
        }
        </style>
    </head>

    <body>
        <?php
            require_once 'author-and-books-list.php';
            $authorDetails = new AuthorDetails();
            $authorDetails ->ShowAuthorBooks ();
        ?>
    </body>
</html>

