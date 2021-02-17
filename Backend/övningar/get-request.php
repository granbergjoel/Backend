<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="get">
Förnamn:<input type="text" name="fname">
Efternamn: <input type="text" name="lname">
<input type="submit" name="men clothing">
<input type="submit" name="women clothing">
<input type="submit" name="jewelery">

</form>

<?php



$fname = isset($_GET['fname']) ? $_GET['fname']:'Gäst';
$lname = isset($_GET['lname'])? $_GET['lname']: 'Gästsson';

echo 'Hej '. $fname. ' '. $lname;
echo '<br><br><br>';



echo "<pre>";
echo 'get';
print_r ($_GET);
echo 'post';
print_r ($_POST);
echo "</pre>";


?>


</body>
</html>