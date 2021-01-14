<?php


class App{
    public static $endpoint ="https://api.namnapi.se/v2/names.json";
//2/names.json
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

    public static function viewData($array){
        $names = $array["names"];
       $list = "<ul>";
       foreach ($names as $key => $name){
           echo "<li>$name[firstname] $name[surname] </li>";
       }
       $list.="</ul>";
       
       /*
        echo "<pre>";
       print_r($names);
       echo "</pre>";
       */
    }

}

?>