<?php 

    include ("App.php"); 

    $count =$_GET["antal"]??"";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON PLACEHOLDER</title>
</head>
<body>
    <h1>10 namn www.jsonplaceholder.se</h1>

<?php

    App::main();

?>

</body>
</html>