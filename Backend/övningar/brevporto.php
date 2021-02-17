<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
    Vad väger brevet i gram: <input type="int" name="weight" id="weight">
    <input type="submit">
    </form>

    <?php
    $weight = isset($_GET['weight']) ? $_GET['weight']: '0';
    if ($weight==0){
        echo "";
    } else  if ($weight<50){
    echo '1 frimärken 9 kronor';
  } else if ($weight<100){
    echo '2 frimärken, 18 kronor';
  }  else if ($weight<250){
    echo '4 frimärke, 36 kronor';
  } else if ($weight<500){
      echo '6 frimärken, 54 kronor';
  } else  if ($weight<1000){
    echo '8 frimärken, 72 kronor';
  }  else if ($weight<2000){
    echo '10 frimärken, 90 kronor';
  } 
 


    ?>
</body>
</html>