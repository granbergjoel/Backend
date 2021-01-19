<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" >
    Ålder <input type="int" name="age">
    <input type="submit">
    </form>


    <?php
    $age =0;
    $age= isset($_GET['age']) ? $_GET['age'] : '0';

    if ($age>18){
        echo 'Välkommen att handla';
    } else{
        echo 'Du är för ung';
    }
    
    
    ?>
</body>
</html>