<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Formulär</title>
</head>
<body>
    <h1>PHP Formulär och GET & POST</h1>
    <h2>Skicka en GET-request via formulär</h2>
<form action="#" method="GET"> 
Vad heter du? <br>
<input type="text" name="fname">

<input type="submit" value="Skicka">
</form>

<?php
echo "<pre>";
    print_r($_GET);
    echo "</pre>";

 

    $firstname = $_GET["fname"];
    echo "<h1>Hej $firstname</h1>";
?>
    </body>
</html>