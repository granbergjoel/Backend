
    <?php 

    class App
    {  
        private static  $endpoint = 'http://localhost/VS%20code/uppgift-03/webshop/Api.php';
        public static function Main()
        {
            echo $_GET['direction'];
            if($_GET['direction']){
                self::$endpoint = self::$endpoint . "?direction=$_GET[direction]";
                }
                
            try {
                $value = self::getData();

                self::viewData($value);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        public static function getData()
        {
            $json = @file_get_contents(self::$endpoint);
            if (!$json)
                throw new Exception('Ingen access till slutpunkten ' . self::$endpoint);
            return json_decode($json, true);
        }

        public static function viewData($value)
        {
            if ($_GET['direction']== 'about'){
                header('Location: about.php');
            } elseif ($_GET['direction']== 'contact'){
                header('Location: contact.php');
            } else {
                
            $list = "<div class='row'>";
            
            foreach ($value as $key => $value){

                $list .= "             
<!-- Card -->
<div class=' col-sm-6 col-md-4 col-lg-3 col-xl-2 card bg-light mb-3 border-dark mb-3' style='width: 20rem;height 18rem;'>
                    <img class=' img-thumbnail' style='height: 18rem;'  src='images/$value[image]' alt='$value[name]' '>
                   
    <!-- Card-body -->
    <div class='card-body'>
                   <h5 class='card-title' style ='text-align:center;'>$value[name]</h5>
    
                   <!-- Läs mer -->
                   <div style = 'text-align:center;'><button type='button' class='btn btn-outline-dark' data-toggle='modal' data-target=#modal$key>Läs mer</button></div> 
    
                   <!-- Pris -->
                   <div class='bottom_aligner' style='text-align: center;'><p>$value[price]kr/kg</p></div> 
                   
        <!-- Modal -->
        <div class='modal fade' id=modal$key tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-name' id='exampleModalLabel' '>$value[name] </h5>
                                            <!-- Stäng(Kryssa ner) Modal -->
                        <button type='button' class='close btn btn-outline-dark' data-dismiss='modal' aria-label='close'><span aria-hidden='true'>&times;</span></button>
                    </div> <!-- Modal Header-->
                       <div class='modal-body'>
                                                <!-- Bild i Modal -->
                                <div> <img class = 'img-thumbnail'src='images/$value[image]' alt='$value[name]' '></div>
                            <p style ='text-align:center;'>$value[description]</p>
                            <p style ='text-align:center;'>Kvar i lager: $value[storage]kg</p>    
                        </div> <!-- ModalBody -->
                                                <!-- Stäng Modal -->
                            <div style ='text-align:center;'><button type='button' class='btn btn-outline-dark' data-dismiss='modal'>Stäng</button></div>
                </div> <!-- Modal content -->
            </div> <!-- Modal Dialog-->
        </div> <!-- Modal -->
    </div> <!-- Card Body -->
</div> <!-- Card -->
                ";}
                $list .= '</div> '; 
                echo $list;
           
        }
            }
    }
    ?>
 