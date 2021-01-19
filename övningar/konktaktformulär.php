<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Namn: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Message: <br><textarea name="message" cols="30" rows="10"></textarea><br>
    <input type="submit">
    </form>

<?php

if (strtoupper($_SERVER['REQUEST_METHOD']== 'POST')){
    $name= test_input($_POST['name']);
    $email= test_input($_POST['email']);
    $message= test_input($_POST['message']);
}

function test_input($data){
    $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<pre>";
echo 'post';
print_r ($_POST);
echo "</pre>";


?>
</body>
</html>