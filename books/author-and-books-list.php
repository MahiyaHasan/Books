<?php
    Class AuthorDetails {
        private $connection;
        private $dbConn;
        private $authorList;
        private $authorBooks;
        public function __construct() {
            require_once 'connection.php';
            $this->connection = new Connection();
            $this->dbConn = $this->connection ->connection ();
        }

        public function ShowAuthorBooks () {
            $this->authorList = 'SELECT Author, COUNT(*) FROM books GROUP BY Author';
            echo "<table>";
            echo "<tr>";
            echo "<th> Author </th>";
            echo "<th> Books Count </th>";
            echo "<th> Books List </th>";
            echo "</tr>";
            foreach ($this->dbConn->query($this->authorList) as $row) {
                echo "<tr>";
                echo "<td>".$row['Author']."</td>";
                echo "<td>".$row['COUNT(*)']."</td>";
                $authorvar = $row['Author'];
                $this->authorBooks = 'SELECT Name FROM books where Author ="'.$authorvar.'"';
                echo "<td>";
                foreach ($this->dbConn->query($this->authorBooks) as $row) {
                    echo $row['Name'];
                    echo ",";
                }
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
       
    }
?>