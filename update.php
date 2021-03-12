<?php
    include_once('functions.php')

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
            while ($row = mysqli_fetch_array($sql)) {
                
            
            
        ?>

        <form action="" method="post">
        
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username"
                value="<?php echo $row['username'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password"
                 value="<?php echo $row['password'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname"
                value="<?php echo $row['firstname'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" 
                value="<?php echo $row['lastname'] ?>" required>
        </div>
        <?php
            }
        ?>
        <button type="submit" name="insert">Insert</button>
    </form>
    </div>
</body>
</html>