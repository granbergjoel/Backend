<?php


 //även det är en sträng
/*
if($num == 5){ // funkar inte med ===

    echo "5 passed <br>";
} else if ($num==6){
    echo "6 passed";
}
else {
    echo "did not pass";
}
echo "<br><br>";
echo "--------------<br><br>";
*/
//Nästlade if-satser
//$num = 6;


/*
if ($num > 4){
    if ($num < 10){
        echo "number passed";
    }
}
*/
// XOR
/*
$num = 3;
if ($num > 4 XOR $num < 10 ){
    echo "number passed";
}
*/



//SWItCHES

$favColor ="gul";

switch ($favColor){
    case "red":
        echo "Color is red";
        break;
    case "blue":
        echo "Color is blue";
        break;
    case "green":
        echo "Color is green";
        break;

        default:
            echo "något annat";
            break;


}















?>