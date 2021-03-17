<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->


  </head>

  <body>
    


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/logo11.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">หน้าเเรก</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="products.php">สินค้า
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">เกี่ยวกับ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">ที่อยู่ร้านเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>เครื่องดื่มต่างๆ</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
 

    <?php
            $conn = mysqli_connect("localhost", "root", "", "student_spvc");
           
            $sql = "SELECT * FROM book_naka";
           $qry = mysqli_query($conn, $sql);
            while($fet = mysqli_fetch_array($qry)){

        ?>




    <div class="featured container no-gutter">

        
            <div id = "1" class="item high col-md-4">
              <a href="single-product.php">
                <div class="featured-item">
                  <img src="wakemeup/<?php echo $fet['image']; ?>">
                  <h2><?php echo $fet['book_name']; ?></h2>
                  <h4><?php echo $fet['price']; ?></h4>
                 
                </div>
              </a>
            </div>
            </div>

<?php
}
?>

      <!--      <div id="2" class="item high col-md-4">
              <a href="single-product1.php">
                <div class="featured-item">
                  <img src="assets/images/product-02.jpg" alt="">
                  <h4>ROSY M.</h4>
                  <h6>฿59.00</h6>
                </div>
              </a>
            </div>
            <div id="3" class="item low col-md-4">
              <a href="single-product2.php">
                <div class="featured-item">
                  <img src="assets/images/product-03.jpg" alt="">
                  <h4>JAPANESE SODA</h4>
                  <h6>฿49.00</h6>
                </div>
              </a>
            </div>
            <div id="4" class="item low col-md-4">
              <a href="single-product3.php">
                <div class="featured-item">
                  <img src="assets/images/product-04.jpg" alt="">
                  <h4>KATOKROK CUP</h4>
                  <h6>฿49.00</h6>
                </div>
              </a>
            </div>
            <div id="5" class="item new high col-md-4">
              <a href="single-product4.php">
                <div class="featured-item">
                  <img src="assets/images/product-05.jpg" alt="">
                  <h4>MISTRESS MEL</h4>
                  <h6>฿79.00</h6>
                </div>
              </a>
            </div>
            <div id="6" class="item new col-md-4">
              <a href="single-product5.php">
                <div class="featured-item">
                  <img src="assets/images/product-06.jpg" alt="">
                  <h4>MELON MELODY</h4>
                  <h6>฿69.00</h6>
                </div>
              </a>
            </div>
            <div id="7" class="item new high col-md-4">
              <a href="single-product6.php">
                <div class="featured-item">
                  <img src="assets/images/product-07.jpg" alt="">
                  <h4>KATOKROK CUP</h4>
                  <h6>฿69.00</h6>
                </div>
              </a>
            </div>
            <div id="8" class="item low new col-md-4">
              <a href="single-product7.php">
                <div class="featured-item">
                  <img src="assets/images/product-08.jpg" alt="">
                  <h4>MIX FRUIT JELLY SHAKE</h4>
                  <h6>฿89.00</h6>
                </div>
              </a>
            </div>
            <div id="9" class="item new col-md-4">
              <a href="single-product8.php">
                <div class="featured-item">
                  <img src="assets/images/product-09.jpg" alt="">
                  <h4>LIME JUICE STRAWBERRY FLOAT</h4>
                  <h6>฿79.00</h6>
                </div>
              </a>
            </div>
        </div>
    </div>

-->


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/senoritasociety/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->





    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>