<?php declare(strict_types=1);   // måste vara högst upp i scriptet?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strikta typer</h1>

    <?php 
    function addNumbers(int $a, int $b):int{
        return $a + $b;
    }

    echo addNumbers(11, 22);
   // echo addNumbers(11, "22"); //ger felmeddelande. 
   
    
    ?>
</body>
</html>