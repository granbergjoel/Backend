<?php include "App.php"; ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jewelery</title>
</head>
<body>
<a href="index.php">Index</a>
<a href="?category=men%20clothing">Men's clothing</a>
<a href="?category=women%20clothing">Women's clothing</a>
<a href="?category=jewelery">Jewelery</a>

    <?php      
   App::main();
    ?>

</body>
</html>