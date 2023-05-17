<?php
    Class ModifyBooks {
        private $dbConn;
        private $showAllItems;
        private $fetchBook;
        private $fetchedBook;
        private $deleteBook;
        private $addBook;
        private $updateBook;
        public function __construct() {
            require_once 'connection.php';
            $this->connection = new Connection();
            $this->dbConn = $this->connection ->connection ();
        }
        public function ShowAllBooks () {
            $this->showAllItems = 'SELECT BookID, Name, Summary, Author, Publisher, Price FROM Books';  
            foreach ($this->dbConn->query($this->showAllItems) as $row) {
                require 'table_rows.php';
            }
        }
        public function FetchBook ($bookID) {
            $this->fetchBook = 'SELECT BookID, Name, Summary, Author, Publisher, Price FROM Books WHERE BookID = :bookID';  
            $statement = $this->dbConn->prepare($this->fetchBook);
            $statement->execute(array(':bookID'=>$bookID));
            $fetchedbook = $statement->fetch(PDO::FETCH_ASSOC);
            // print_r($fetchedbook["Name"]);
            return $fetchedbook;
        }
        public function DeleteBook ($bookID) {
            $this->deleteBook = 'DELETE FROM books where BookID = :bookID';
            $statement = $this->dbConn->prepare($this->deleteBook);
            $statement->execute([
                ':bookID' => $bookID
            ]);
        }
        public function AddBook ($name , $summary, $author, $publisher , $price) {
            $this->addBook = 'INSERT INTO Books(Name, Summary, Author, Publisher, Price) VALUES(:name, :summary, :author, :publisher, :price)';
            $statement = $this->dbConn->prepare($this->addBook); 
            $statement->execute([
                ':name' => $name,
                ':summary' => $summary,
                ':author' => $author,
                ':publisher' => $publisher,
                ':price' => $price
            ]);
        }
        public function UpdateBook ($name , $summary, $author, $publisher , $price, $bookID) {
            $this->updateBook = 'UPDATE Books SET Name = :name , Summary = :summary, Author = :author, Publisher = :publisher, Price = :price WHERE BookID = :bookID';
            $statement = $this->dbConn->prepare($this->updateBook); 
            $statement->execute([
                ':name' => $name,
                ':summary' => $summary,
                ':author' => $author,
                ':publisher' => $publisher,
                ':price' => $price,
                ':bookID' => $bookID
            ]);
        }
    }
?>