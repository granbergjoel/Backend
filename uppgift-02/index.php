<?php include 'App.php'; ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Index</title>
</head>
<body>
<a href="?category=index">Index</a>
<a href="?category=men%20clothing">Men's clothing</a>
<a href="?category=women clothing">Women's clothing</a>
<a href="?category=jewelery">Jewelery</a>


<form action="#" method="post">
 <input type="submit" name="category" value="men clothing">
 <input type="submit" name="category"value="women clothing">
<input type="submit" name="category"value="jewelery">
</form>



    <?php
    print_r($_POST);

    
    App::main();
    ?>


</body>
</html>