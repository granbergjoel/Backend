   
<?php

// CAMEL CASE == myFunction();
//LOWER CASER == my_function();
//PASCAL CASE == MyFunction();


function simpleFunction(){
    //Skriv kod här

    echo "Hello World <br>";
}

simpleFunction();

//Function with parameters
function sayHello($name = "world"){
    echo "Hello $name<br>";
    }

sayHello("Joel ");
sayHello("Granberg");
sayHello();
sayHello("Namn<br>");

echo "--------<br><br>";


//Retrun value
function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(2,3);

echo "--------<br><br>";

$myNum=10;

function addFive($num){
    $num+=5;
}

function addTen (&$num){
    $num+=10;
}

addFive($myNum);
echo $myNum."<br>";

addTen($myNum);
echo $myNum;
?>

