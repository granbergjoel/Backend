<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Med flera variabler</title>
</head>
<body>
<h1>Fler variabler</h1>
<a href="?name=Joel&ordernummer=123">Joel</a>
<a href="?name=Stina&ordernummer=456">Stina</a>
<a href="?name=Ronja&ordernummer=789">Ronja</a>

<?php

function print_array(){ // funktion som skriver ut get-array
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

// tar in info från url, i detta fall name och Joel samt ordernummer


echo "<h1>Jobba med Get/Post</h1>";
print_array(); //funktionsanrop

if(isset($_GET["name"])){
    echo "<h1> Hello " . $_GET["name"]. "</h1>";
};

$user= $_GET["name"];
$order = $_GET["ordernummer"];
echo "Hej $user , ditt ordernummer är $order";




?>
</body>
</html>
