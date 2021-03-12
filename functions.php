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
    public function insert($username,$password,$firstname, $lastname,) {
        $result = mysqli_query($this->dbcon, "INSERT INTO user(id, username, password, firstname, lastname) VALUES('$id', '$username', '$password', '$firstname', '$lastname')");
        return $result;
    }

    public function fetchdata(){
        $result = mysqli_query($this->dbcon, "SELECT * FROM user");
        return $result;
    }

    public function fetchonerecord($userid){
        $result = mysqli_query($this->dbcon, "SELECT * FROM user WHERE id = '$userid'");
        return $result;
    }

    public function update($username,$password,$firstname, $lastname, $userid){
        $result = mysqli_query($this->dbcon, "UPDATE user SET 
        username = '$username',
        password = '$password',
        firstname = '$firstname',
        lastname = '$lastname'
        WHERE id = '$userid'
        
        ");
        return $result;
    }

    }
?>