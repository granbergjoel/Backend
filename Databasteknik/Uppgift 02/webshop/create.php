<?php

//************  CREATE  *****************

require_once ("header.php");
require_once ("dbwebshop.php");

$conn->exec("USE $dbName");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $customer = filter_var($_POST['customer'], FILTER_SANITIZE_STRING);
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $messages = filter_var($_POST['messages'], FILTER_SANITIZE_STRING);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

        $stmt = $conn->prepare("INSERT INTO contacts (customer, email, messages)
                                    VALUES (:customer , :email , :messages)");
    
        $stmt->bindParam(':customer', $customer);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':messages', $messages);
    
        $stmt->execute();

        $last_id = $conn->lastInsertId();
    
        $message = "<div class='alert alert-success' role='alert'>
                        <p>$customer har sparats i databasen med id=$last_id</p>
                    </div>";  
    } 
    
    else {
        exit("<div class='alert alert-warning' role='alert'>
        <p>$email är inte en giltig e-postadress</p></div>");
    }      
    
}

?>

<form action="#" class="row" method="post">

    <div class="col-md-6 my-2">
    <label for="names">Namn:</label>
        <input id="text" type=" text" class="form-control" name="customer" required>
    </div>

    <div class="col-md-6 my-2">
    <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" required>
    </div>

    <div class="col-md-12 my-2">
    <label for="messages">Meddelande (Max 100 tecken):</label>
        <textarea class="form-control" rows="3" name="messages" required></textarea>
    </div>

    <div class="col-md-4 my-2" rows="3">
        <input type="submit" value="Skicka meddelandet" class="form-control btn btn-success">
    </div>

</form>

<?php

if(isset($message)) echo $message;

require_once ("footer.php");

?>
