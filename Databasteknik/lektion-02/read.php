<?php
/*****************************
* 
*        Read
*     Läs tabellen contacts
*       från databasen
*
*   Presentera i HTML-tabell
*****************************/

//Hämta vår conn (en instans av PDO)
require_once ("database.php");

// Förbered en SQL-sats

$stmt = $conn->prepare("SELECT * FROM contacts");

//Kör SQL-satsen
$stmt->execute();

//Hämta alla rader i tabellen contacts
//Returnerar en array, multidimensionell
$result = $stmt->fetchAll();

$table= "<table class='table table-hover'>
        <tr><th>Namn</th><th>Telefon</th><th>Email</th><th>Address</th><th>Admin</th></tr>";



foreach($result as $key =>$value){
    echo "<pre>";
    print_r($result);
    echo "</pre>";

$table.="
    <tr>
        <td>$value[name]</td>
        <td>$value[tel]</td>
        <td>$value[email]</td>
        <td>$value[address]</td>
        <td>
            <a href='update.php?id=$value[id]'>Uppdatera</a> |
            <a href='delete.php?id=$value[id]'>Ta bort</a>
        </td>

    </tr>
";
}
$table .="</table>";
echo $table;