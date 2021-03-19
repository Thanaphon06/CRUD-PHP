<?php
    include_once('functions.php');

    $updatedata = new DB_con();

    if(isset($_POST['update'])){
        $userid = $_GET['id'];
        $uuser = $_POST['book_name'];
        $fname = $_POST['price'];

    

        $sql = $updatedata->update($uuser, $fname, $lname, $userid);

        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }

    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>
<body>
    

    <div class="container">
        <h1>Update page</h1>
        <hr>
        <?php
           $userid = $_GET['id'];
           $updateuser = new DB_con();
           
           $sql = $updateuser->fetchonerecord($userid);
           while($row = mysqli_fetch_array($sql)) {
                
            
            
        ?>

        <form action="" method="post">
        
        <div class="mb-3">
            <label for="book_name" class="form-label">book name</label>
            <input type="text" class="form-control" name="book_name"
                value="<?php echo $row['book_name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Password</label>
            <input type="text" class="form-control" name="price"
                 value="<?php echo $row['price'] ?>" required>
        </div>
     
        <?php
            }
        ?>
        <button type="submit" name="update">Insert</button>
    </form>
    </div>
</body>
</html>