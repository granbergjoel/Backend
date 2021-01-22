
    <?php

    Class App{
        private static  $endpoint = 'http://localhost/VS%20code/uppgift-03/webshop/Api.php';
    public static function Main(){
            //metodanrop här
            try{
                $array = self::getData();
                
                self::viewData($array);

            } catch (Exception $e){
                echo $e->getMessage();
            }
    }
        //Getdata

    public static function getData(){

        
     $json =@file_get_contents(self::$endpoint);
     if(!$json)
     throw new Exception('Ingen access till slutpunkten '. self::$endpoint);
     return json_decode($json, true);
    
    }

     //Viewdata
    // Lägg till en isset(category) för index, about och contact
    // skriv ut about och contact här nedan. 
     public static function viewData($array){
         
 $list ="<ol> 
        <div class='row'>";
foreach ($array as $key => $value) {

$list .="
    <div class='card' style='width: 18rem;'> 
    <img class='card-img-top' src='images/$value[image]' alt='Card image cap'>
    <div class='card-body'>
      <h5 class='card-title'>$value[name]</h5>
      <p>$value[description]</p>
      <a href='#' class='btn btn-primary'>Go somewhere</a>
    </div>      <!-- card-body -->
  </div>         <!-- card -->
    ";  
}

// hej hopp



$list .= '</div> </ol>';  // row
echo $list;
}

// viewAbout
/*
public function viewAbout(){
    $about = "<h1>Lorem, ipsum dolor.</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis hic facilis, quibusdam ullam aperiam? Itaque laborum possimus aspernatur perspiciatis laudantium sit delectus ipsam vero facilis alias. Illo et totam numquam, error maiores mollitia voluptates excepturi temporibus inventore? Pariatur, architecto.</p>";

    echo $about;
}
// Viewcontact
public function viewContact(){
    $contact ="<form action=''>
    Ditt Namn: <input type='text'>
    Din Epost: <input type='email'>
    Skriv din fråga <textarea name='#' id='#' cols='30' rows='10'></textarea>
    </form>";

    echo $contact;
}
*/


}
    ?>
 