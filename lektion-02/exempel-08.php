<?php
if(strtoupper($_SERVER["REQUEST_METHOD"]!= "POST")){
    http_response_code(400);
    exit("Bad Request");
} else{
    echo "Hello ". htmlspecialchars($_POST["fname"]);
}

?>