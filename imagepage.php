<?php

$conn = mysqli_connect("localhost", "root", "", "student_spvc");
if($conn){
    echo "connection";
}
    if(isset($_POST ['uploadfilesub'] )) {
        $filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'wakemeup/';

        move_uploaded_file($filetmpname, $folder.$filename);
    

    $sql = "INSERT INTO `book_naka`(`image`)
     VALUES ('filename')";

    $qry = mysqli_query($conn, $sql);
    if($qry){
        echo "image uploaded";
    }

    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadfile" />
    <input type="submit" name="uploadfilesub" />


</body>
</html>