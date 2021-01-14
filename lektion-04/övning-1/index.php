<?php 

    include ("App.php"); 

    $count =$_GET["antal"]??"";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>10 namn från <a href="https://namnapi.se">www.namnapi.se</a></h1>

<?php

    App::main($count);

?>

</body>
</html>