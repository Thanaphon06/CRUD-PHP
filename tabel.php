<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yee</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>image</th>
                <th>book name</th>
                <th>price</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "student_spvc");
           
            $sql = "SELECT * FROM book_naka";
           $qry = mysqli_query($conn, $sql);
            while($fet = mysqli_fetch_array($qry)){
        ?>


            <tr>
                <td><?php echo $fet['id']; ?></td>
                <td><img src="wakemeup/<?php echo $fet['image']; ?>" width = "500px"></td>
                <td><?php echo $fet['book_name']; ?></td>
                <td><?php echo $fet['price']; ?></td>
                
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>