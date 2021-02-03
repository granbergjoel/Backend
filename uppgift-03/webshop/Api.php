<?php
include_once'Product.php';

header("Content-type: application/json; charset=UTF-8");

$limit = isset($_GET['direction'])? $_GET['direction'] : 10; 
/*
$url = $_SERVER['REQUEST_URI'];
$test=parse_url($url);                //onödig och komplicerad kontroll
parse_str($test['query'],$output);
$validate = $output['direction'];
*/
$min = 1;
$max = 10;
if (filter_var($limit, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  $json = json_encode('Error, felaktig inmatning. Får endast innehålla siffror mellan 1 och 10',JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
  
  echo $json;
 
  } else {
    $products = array();

for ($i=0; $i <$limit ; $i++) { 
    $productObject = new Product($i);
    $product = $productObject->toArray();
    array_push($products,$product);
}
$json = json_encode($products,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $json;
}
?>