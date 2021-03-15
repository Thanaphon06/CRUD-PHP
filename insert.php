<?php

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['uploadfilesub'])) {
        
        $uuser = $_POST['book_name'];
        $pword = $_POST['price'];
        $fname = $_POST['image'];
        $filename = $_FILES['uploadfile']['name'];
        $filetmpname = $_FILES['uploadfile']['tmp_name'];
        $folder = 'wakemeup/';

        //move_uploaded_file($filetmpname, $folder.$filename);
        

       
        $sql = $insertdata->insert($uuser, $pword, $fname,$filetmpname, $folder.$filename);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }

    }

   // if(isset($_POST ['uploadfilesub'] )) {
    //    $filename = $_FILES['uploadfile']['name'];
     //   $filetmpname = $_FILES['uploadfile']['tmp_name'];
     //   $folder = 'wakemeup/';

    //    move_uploaded_file($filetmpname, $folder.$filename);
    

   // $sql = "INSERT INTO `book_naka`(`image`)
   //  VALUES ('filename')";

   // $qry = mysqli_query($conn, $sql);
   // if($qry){
    //    echo "image uploaded";
    //}

    


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

   
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action="" method="post">
        
            <div class="mb-3">
                <label for="book_name" class="form-label">Username</label>
                <input type="text" class="form-control" name="book_name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Password</label>
                <input type="text" class="form-control" name="price" required>
            </div>
            
            <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="uploadfile" />
            <input type="submit" name="uploadfilesub" />
            
        </form>
    </div>


  
</body>
</html>