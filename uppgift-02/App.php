<?php
 
Class App{

public static function main(){
    $endpoint = "https://fakestoreapi.com/products";
    try {
    $products = self::getData($endpoint);
    self::viewData($products);
    } catch (Exception $e) {
    echo $e->getMessage();
    }
    }

    public static function postData(){
        $postValue = $_GET['name'];
        echo $postValue;
    }
     
public static function getData($endpoint){
    $json = @file_get_contents($endpoint);
    if (!$json)
    throw new Exception("Cannot access $endpoint");
    return json_decode($json, true);
    }
    
public static function viewData($array){

if (isset($_GET['category'])){
    $category = strtolower($_GET['category']);
    foreach ($array as $key => $value) {

        if($category == 'electronics'){
            break;
        }else if($value['category'] == $category){
            $items="<div class='col-lg-4 col-md-6 mb-4'>
            <div class='card mt-4'>
            <img class='card-img-top img-fluid' src='$value[image]' alt=''>
             <div class='card-body'>
            <h3 class='card-title'>$value[title]</h3>
            <h4>$value[price]</h4>
            <p class='card-text'>$value[description]
            </p>
            </div>
            </div>   
            </div>";

            
            echo $items;    
                }
            }           
        }      
    }  
}
?>
