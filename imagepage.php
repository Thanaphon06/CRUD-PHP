<?php

$conn = mysqli_connect("localhost", "root", "", "student_spvc");
if($conn){
    echo "connection";
}
    if(isset($_POST ['uploadfilesub'] )) {
        $filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'wakemeup/';
        $uuser = $_POST['book_name'];
        $pword = $_POST['price'];

        move_uploaded_file($filetmpname, $folder.$filename);
    

    $sql = "INSERT INTO book_naka(image, book_name, price) VALUES ('$filename', '$uuser',  '$pword')";
            
    $qry = mysqli_query($conn, $sql);
    if($qry){
        echo "image uploaded";

    
}
}

   /* if (isset($_POST['uploadfilesub'])) {
    
    $uuser = $_POST['book_name'];
    $pword = $_POST['price'];


//move_uploaded_file($filetmpname, $folder.$filename);


    $sql = "INSERT INTO 'book_naka'('book_name', 'price') VALUES('$uuser', '$pword')";
    $qry = mysqli_query($conn, $sql);
    
}*/

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
    <div class="mb-3">
                <label for="book_name" class="form-label">book name :</label>
                <input type="text" class="form-control" name="book_name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" required>
            </div>

</body>
</html>