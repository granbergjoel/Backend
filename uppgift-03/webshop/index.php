<?php include_once('App.php');  ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<!-- TODO 
1. Importera json, skapa en klass i App
    main(), skriv ut bilder på index-sida
2. Lägg till all felhantering förutom limit
3. -->


<!-- Header med 3 menyval
     Home(index) - Visar produkter
     About - Lorem Ipsum 
     Contact - E-post formulär
     Footer med kanske ett datum? copy? -->


        <!-- Bild ovanför header -->
    <div class="header">
  <h1>Header</h1>
  <p>My supercool header</p>
    <a href="?category=index"  class="list-group-item">Home</a>
    <a href="?category=about"  class="list-group-item">About</a>
    <a href="?category=contact"  class="list-group-item">Contact</a>
    </div>




<?php     
echo '<pre>';
print_r($_GET);
echo '</pre>';

App::main();
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>