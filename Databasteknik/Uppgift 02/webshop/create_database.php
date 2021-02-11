<?php

require_once ('arrays.php');
require_once ('database.php');

// TA bort databasen!

$conn->exec("DROP DATABASE IF EXISTS $dbName");
//echo "<h2>$dbName deleted</h2>";

// Skapa en ny databas
$conn->exec("CREATE DATABASE IF NOT EXISTS $dbName
             CHARACTER SET utf8
             COLLATE utf8_swedish_ci;");
//echo "<h2>$dbName created</h2>";

$conn->exec("USE $dbName");
//echo "<h2>$dbName selected!</h2>";


/***********************************
*
*       Här skapar vi
*       våra produkter
*
***********************************/

$conn->exec("CREATE TABLE products(
    product_id int(11) NOT NULL AUTO_INCREMENT,
    names varchar (50),
    price int (11), 
    descriptions varchar (255),
    images varchar (255),
    PRIMARY KEY (product_id)
)"
);
/*
echo "<pre>";
print_r($productsArray);
echo "</pre>";
echo "<pre>";
print_r($productsArray[0][0]);
echo "</pre>";
echo "<pre>";
print_r($productsArray[1][0]);
echo "</pre>";
echo "<pre>";
print_r($productsArray[2][0]);
echo "</pre>";
echo "<pre>";
print_r($productsArray[3][0]);
echo "</pre>";


$name = $productsArray[0][0];
$price = $productsArray[1][0];
$description = $productsArray[2][0];
$images = $productsArray[3][0];

echo $name ."<br>";
echo $price."<br>";
echo $description."<br>";
echo $images."<br>";


$sql = "INSERT INTO products(names, price, descriptions, images) VALUES ('$name', '$price','$description', '$images')";
$conn->exec($sql);    


echo "<pre>";
print_r($data);
echo "</pre>";


foreach ($nameArray as $key => $data) {
    $sql = "INSERT INTO products (names) VALUES ('$data')";
    $conn->exec($sql);    
    echo "<p>$data added to names successfully</p>";
}
foreach ($priceArray as $key => $data) {
    $sql = "INSERT INTO products (price) VALUES ('$data')";
    $conn->exec($sql);    
    echo "<p>$data added to price successfully</p>";
}
foreach ($descriptionArray as $key => $data) {
    $sql = "INSERT INTO products (descriptions) VALUES ('$data')";
    $conn->exec($sql);    
    echo "<p>$data added to descriptions successfully</p>";
}
foreach ($imageArray as $key => $data) {
    $sql = "INSERT INTO products (images) VALUES ('$data')";
    $conn->exec($sql);    
    echo "<p>$data added to images successfully</p>";
}
*/


/***********************************
*
*       Här skapar vi
*       våra kunder
*
***********************************/

$conn->exec("CREATE TABLE customers(
    customers_id int(11) NOT NULL AUTO_INCREMENT,
    names varchar (50),
    phone varchar(50),
    email varchar (50),
    addresses varchar(50),
    PRIMARY KEY (customers_id)
)"
);

/***********************************
*
*       Här skapar vi
*       våra ordrar
*
***********************************/

$conn->exec("CREATE TABLE orders(
    order_id int(11) NOT NULL AUTO_INCREMENT,
    product_id int (11),
    customer_id int(11),
    PRIMARY KEY (order_id) 
)"
);

/***********************************
*
*       Här skapar vi
*       våra meddelanden
*
***********************************/

$conn->exec("CREATE TABLE contact(
    contact_id int(11) NOT NULL AUTO_INCREMENT,
    names varchar(50),
    email varchar (50),
    messages varchar(255),
    PRIMARY KEY (contact_id) 
)"
);



