<?php
/*
if (isset($_GET["name"])){
 $name = htmlentities($_GET["name"]);
 echo $name;
}

if (isset($_POST["name"])){
    $name = htmlentities($_POST["name"]);
    echo $name;
   }

   if (isset($REQUEST["name"])){
    $name = htmlentities($REQUEST["name"]);
    echo $name;
   }
*/

echo $_SERVER["QUERY_STRING"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="GET" action="get-post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>


</body>
</html>