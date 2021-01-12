<?php

echo "<h1> REQUEST-metoden som används just nu är ";
echo $_SERVER["REQUEST_METHOD"];
echo "</h1>";

echo "<pre>";
    
//print_r($_SERVER);

?>

<form action="#" method="post">
<input type="text" name="fname">
<input type="submit" value="Send"></form>

<?php

if(strtoupper($_SERVER["REQUEST_METHOD"]== "POST")){
    echo "Hello ". $_POST["fname"];
}

?>
