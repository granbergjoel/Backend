<?php

//$people = array ("Kevin", "Jeremy", "Sara");
//echo $people[1] . "<br>";

$numbers = array (23,55,12);
echo $numbers[2]. "<br>";

/*$cars = array("Honda", "Toyota", "Ford");
echo $cars[0]. "<br>";
$cars[3] = "Chevy";
echo $cars[3]. "<br>";
$cars[]="BMW";
echo $cars[4]. "<br>";

echo count($cars) ,"<br>";
echo print_r($cars) ,"<br><br>";
echo var_dump($cars) ,"<br><br>";
*/
$people = array("Brad" => 35, "Jose" => 32, "William" => 37 );
echo $people["Brad"]."<br>";

$ids = array (22=> "Brad", 44 => "Jose", 37 => "William");
echo $ids["37"]."<br>";

$people["Jill"] = 42;
echo $people["Jill"]."<br>";

$cars = array (
    array("Honda", 20, 10),
    array("Toyota", 30, 20),
    array("Ford", 23,12)
);

echo $cars[1][2]."<br>";

?>