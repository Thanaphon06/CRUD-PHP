<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexpage</title>
</head>
<body>
    <a href = "insert.php"> go to insert </a>
    <table id="mytable" class="table table-bordered table-striped">
    <thead>
    <th>#</th>
    <th>BookName</th>
    <th>Price</th>
    <th>Firstname</th>
    
    <th>Edit</th>
    <th>Delete</th>

    </thead>

    <tbody>
    <?php
    include_once('functions.php');
    $fetchdata = new DB_con();
    $sql = $fetchdata->fetchdata();
    while($row = mysqli_fetch_array($sql)){

        
    ?>

            <tr>
                <td><?php echo $row['0']; ?></td>
                <td><?php echo $row['1']; ?></td>
                <td><?php echo $row['2']; ?></td>
                <td><?php echo $row['3']; ?></td>
                
                <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?del=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>

    <?php
    }

    ?>
    </tbody>
    </table>
</body>
</html>