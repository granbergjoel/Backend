<?php
/*
echo date("d<br>");
echo date("m<br>");
echo date("y<br>");
echo date("l<br>");

echo "<br><br>";

echo date("y/m/d");
echo "<br><br>";
echo date("m/d/y<br><br>");

*/



echo date("h <br>");
echo date("i <br>");
echo date("s <br>");
echo date("a <br>");

echo " <br><br>";



//För att få rätt tidszon
date_default_timezone_set("Europe/Stockholm"); //Funkar nu!
echo date("h:i:sa <br><br>")


/*
$timestamp = mktime (10,14,54,9,10,1981);
echo $timestamp; // ger bara siffror, antalet sekunder som gått sedan datumet ovan

echo "<br>";
*/
//echo date("m/d/Y h:i:sa");

/*
$timestamp2 = strtotime("7:00pm March 22 2016");
$timestamp3 = strtotime("tomorrow");
$timestamp4 = strtotime("next sunday");
$timestamp5 = strtotime("+2 Days");
//echo $timestamp2;
echo date("<br>m/d/y h:i:sa", $timestamp3);
*/

?>