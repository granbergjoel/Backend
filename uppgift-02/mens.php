<?php include "App.php"; ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mens Clothing</title>
</head>
<body>
<a href="index.php" method="POST">Index</a>
<a href="?category=men%20clothing" method="POST">Men's clothing</a>
<a href="?category=women%20clothing" method="POST">Women's clothing</a>
<a href="?category=jewelery" method="POST">Jewelery</a>




    <?php      

  App::main();
    ?>

    
</body>
</html>