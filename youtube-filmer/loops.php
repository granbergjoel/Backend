<?php

for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo "<br>";
}
echo "-------------------------<br><br>";
echo "WHILE<br>";


$i=0;

while ($i <= 10) {
    echo $i;
    echo "<br>";
    $i++;
}

echo "-------------------------<br><br>";
echo "DO/WHILE<br>";

$i = 0;

do{
    echo $i;
    echo "<br>";
    $i++;
}

while ($i <= 10);

echo "-------------------------<br><br>";
echo "FOR/EACH<br>";

$people = array("Brad","Jose","William");

foreach ($people as $person) {
    echo $person;
    echo "<br>";
}

echo "-------------------------<br><br>";
echo "FOR/EACH 2<br>";

$people = array("Brad" => "brad@gmail.com","Jose" => "jose@gmail.com","William" => "william@gmail.com");

foreach ($people as $person => $email) {
    echo $person .":" .$email;
    echo "<br>";
}

?>