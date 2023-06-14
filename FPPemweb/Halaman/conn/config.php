<?php

$db_host = "localhost";
$db_user = "fiks3768_fiksneak";
$db_pass = "Satriadewa123";
$db_name = "fiks3768_fiksneak";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}