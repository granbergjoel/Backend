<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<form action="#" method="get">
Förnamn: <input type="text" name="fname"><br>
Efternamn: <input type="text" name="lname"><br>
<input type="submit">
</form>

<?php
echo "<pre>";
print_r ($_GET);
echo "</pre>";

$fname = $_GET["fname"] ?? "void";
$lname = $_GET["lname"] ?? "void";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data= strtolower($data);
    $data = str_replace(" ", "", $data);
    $data = str_replace("å", "a", $data);
    $data = str_replace("ä", "a", $data);
    $data = str_replace("ö", "o", $data);
    return $data;
  }
$fname = test_input($fname);
$lname = test_input($lname);

$testName=$fname.$lname;
$email = $fname. "." .$lname. "@yh.nackademin.se";
if(strlen($testName)>19){
    echo "För många tecken, max 20st";
}else if (!ctype_alpha($testName)){
    echo "ERROR - får endast innehålla bokstäver <br>";
} else if($fname =="void" || $lname == "void") {
    $email="";
}else {
 echo   $email;
    }
    ?>
</body>
</html>