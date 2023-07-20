<?php


// Identifiants
$host = "sql305.infinityfree.com";
$username = "if0_34628502";
$password = "N1yO6C5MqIst";
$database = "if0_34628502_database1";

// Connection à la base de données 
$conn = mysqli_connect($host, $username, $password, $database);

// verifier la connection
if (!$conn) {
    die("Connection échoué: " . mysqli_connect_error());
}
?>


