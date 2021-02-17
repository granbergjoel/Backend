<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   
   <title>Document</title>
</head>
<body>


<?php

$endpoint = "https://dog.ceo/api/breeds/list/all";
$json = file_get_contents($endpoint);
$array = json_decode($json, true);
$dogs = $array['message'];

$list="<ul>";
foreach ($dogs as $key => $value) {
    
   $list.= "<li> <a href='dogs.php'>$key</a></li>";

}
$list.="</ul>";

echo $list;
?>




</body>
</html>



