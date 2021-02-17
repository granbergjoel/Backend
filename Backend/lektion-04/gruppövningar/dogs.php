

<?php
//Kod för att visa hundar 
$dogsendpoint = "https://dog.ceo/api/breed/hound/images";
$json2 = file_get_contents($dogsendpoint);
$array2 = json_decode($json2);
$dogpics = $array2['message'];

echo "<img src='https://images.dog.ceo/breeds/hound-afghan/n02088094_1003.jpg' alt=''>";

$endpoint = "https://dog.ceo/api/breeds/list/all";
$json = file_get_contents($endpoint);
$array = json_decode($json, true);
$dogs = $array['message'];

$test ="afghan";

function getPics($array){
    foreach ($array as $key=> $value) {
      //  if(preg_match($key, $array2)){
       // echo $key;
    //}
    echo "HÄR ÄR VI";
    }

}

getPics($dogpics);

echo "<pre>";
print_r($array2);
echo "</pre>";


?>