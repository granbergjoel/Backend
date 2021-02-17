<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "<pre>";
print_r ($_GET);
echo '<br><br>';
echo "</pre>";

$data = $_GET;

foreach($data as $key => $value)
{
  echo $key." has the value ". $value;
}

//En funktion som tar emot en get request
//den måste indentifiera nyckel varje gång
//foreach? med value as key

?>  
</body>
</html>

