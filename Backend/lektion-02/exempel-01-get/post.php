<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="http://localhost/lektion-02/get-post-exempel-01.php?name=Joel">Joel</a>
<a href="http://localhost/lektion-02/get-post-exempel-01.php?name=Stina">Stina</a>
<a href="http://localhost/lektion-02/get-post-exempel-01.php?name=Ronja">Ronja</a>

<?php
// tar in info från url, i detta fall name och Joel
echo "<h1>Jobba med Get/Post</h1>";

echo "Hej " . $_GET["name"];

?>
</body>
</html>



