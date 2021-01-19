<?php

//1. Skapa en http-header
header("Content-Type: application/json; charset=UTF-8");

//2.  Skapa 2 arrayer för att lagra för och efternamn
$firstnames = ["Åsa", "Mahmud", "Kalle","FN 4", "FN 5", "Adam"];
$lastnames = ["Öberg","Al Hakim","LN 3","LN 4","LN 5", "Ericsson"];

//3. Skapa 10 olika namn (för och efter). Spara i en array som heter $names. Det behövs en associativ array. 
$names = array();


for ($i=0; $i <10 ; $i++) { 
    # code...

$name = array(
    "firstname"=> $firstnames[rand (0,count($firstnames)-1)],
    "lastname"=> $lastnames[rand (0,count($lastnames) -1)]
);

array_push($names, $name);
}

//4. konvertera PHP-arrayen till en json-sträng
$json= json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);


//5. skicka JSON till klienten
echo $json;

?>