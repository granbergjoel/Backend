<?php include_once "App.php";?>
<!DOCTYPE html>
<html lang="sv">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joels Butik</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
</head>

<body>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Joels Butik</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">Välj Kategori</a>
          <a href="?category=women%20clothing"  class="list-group-item">Women's clothing</a>
          <a href="?category=men clothing"  class="list-group-item">Men's clothing</a>
          <a href="?category=jewelery"  class="list-group-item">Jewelry</a>
          
        </div>
      </div>

    <?php App::main();?>

    </div>

  </div>
 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
