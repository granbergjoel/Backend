<?php

/*
//$output = substr("Hello", 1,3);
$output = substr("Hello", -1);

echo $output;
*/

/*
$output = strlen("Hello World");
echo $output;
*/

/*
$output = strpos("Hello World", "o");
echo $output;
*/

/*
$output = strrpos("Hello World", "o");
echo $output;
*/

/*
$text = "hello world              ";
var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);
*/

/*
$output = strtoupper("Hello World");
echo $output;
$output = strtolower("Hello World");
echo $output;
*/

/*
$output = ucwords("hello world");
echo $output;
*/

/*
$text = "hello world";
$output = str_replace("world", "everyone", $text);
echo $output
*/

/*
$val = "Hello";
$output = is_string($val);
echo $output;
*/

/*
$values = array (true, false, null, "abc", 33, "33", 22.4, "22.4",""," ", 0, "0");

foreach ($values as $value){
    if(is_string($value)){
        echo "{$value} is a string<br>";
    }
}
*/

$string = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem eum, deserunt numquam magnam, voluptas natus quis facilis officia nisi ex cumque fugiat rem totam unde dolorem nulla beatae, magni repudiandae.";

$compressed = gzcompress($string);
echo $compressed;

$original = gzuncompress ($compressed);
echo $original;


?>