<?php
// Ange en endpoint/resurs
//sparas som en variabel
$url = "https://jsonplaceholder.typicode.com/users";

// Hämta data
//sparas i en annan variabel
$json = file_get_contents($url);

// Skriv ut data (för att testa)
//echo $json;

//Konvertera json till array i PHP
$array= json_decode($json, true);
//Test att skriva ut array
/*
echo "<pre>";
print_r($array);
echo "</pre>";
*/
echo "<ul>"; // sätt foreach loopen i en ul så skapas en lista, skriv då ut list items i foreach loopen
foreach ($array as $key => $value) {
    echo "<li>".$value['name'] . "</li>";
    //echo $value['address']['street'];

    };
    echo "</ul>";

    