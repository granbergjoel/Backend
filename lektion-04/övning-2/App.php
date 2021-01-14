<?php


class App{
    public static $endpoint = "https://jsonplaceholder.typicode.com/users";

    public static function main(){
try{
   
       $array = self::getData();
        self::viewdata($array);
       /*
       echo "<pre>";
       print_r($names);
       echo "</pre>";
        */
    }
    catch (Exception $e){
        echo $e -> getMessage();
    }
    }



    public static function getData(){
       
        $json = @file_get_contents(self::$endpoint);
        //Felsökning av fil get contents nedan
        if(!$json){
            throw new Exception("Problem med att hitta namn just nu");
        }
        // för att EXCEPTION ska fungera måste metodanrop sättas i en try/catch
        return json_decode($json, true);
    }

    public static function viewData($name){

       $list = "<ul class='list-group'>";
       foreach ($name as $key => $name){
         $list.= "<li>$name[name]  </li>";
       }
       $list.="</ul>";
       
       echo $list;

       echo "<hr>";



       $address="";
       foreach ($name as $key => $name){
        $address .= "<div class='address'>";
        $address.= "
        <h2>
        $name[name]  
        </h2
        ";
        $address= "</div>";
      }

      echo $address;
      
       
       /*
        echo "<pre>";
       print_r($names);
       echo "</pre>";
       */
    }

}

?>