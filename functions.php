<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'student_spvc');

    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if(mysqli_connect_errno()) {
                echo "Failed" . mysqli_connect_error();
            }
    }
    public function insert($book_name,$price) {
        $result = mysqli_query($this->dbcon, "INSERT INTO book_naka(book_name, price) VALUES('$book_name', '$price')");
        return $result;
    }

    public function fetchdata(){
        $result = mysqli_query($this->dbcon, "SELECT * FROM book_naka");
        return $result;
    }

    public function fetchonerecord($userid){
        $result = mysqli_query($this->dbcon, "SELECT * FROM book_naka WHERE id = '$userid'");
        return $result;
    }

    public function update($book_name,$price,$image,$userid){
        $result = mysqli_query($this->dbcon, "UPDATE book_naka SET 
        book_name = '$book_name',
        price = '$price',
        image = '$image'

        WHERE id = '$userid'
        
        ");
        return $result;
    }

    }
?>