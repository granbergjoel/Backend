<?php include_once 'App.php'; ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Index</title>
</head>
<body>

<a href="?category=index">Index</a>
<a href="?category=men%20clothing">Men's clothing</a>
<a href="?category=women clothing">Women's clothing</a>
<a href="?category=jewelery">Jewelery</a>



<!--
<form action="#" method="post">
 <input type="submit" name="category" value="Men clothing">
 <input type="submit" name="category"value="Women clothing">
<input type="submit" name="category"value="Jewelery">
</form>
-->



    <?php
   // print_r($_POST);

    
    App::main();
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>