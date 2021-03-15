<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "student_spvc");
  if($db){
    echo "connection";
}
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['book_name']);

  	// image file directory
  	$target = "wakemeup/".basename($image);

  	$sql = "INSERT INTO 'book_naka' ('image', 'book_name') VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM book_naka");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head>
<body>
<div id="content">
  
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <label for="book_name" class="form-label">Username</label>
                <input type="text" class="form-control" name="book_name" required>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>