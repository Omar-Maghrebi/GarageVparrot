<?php


// Identifiants

$host = "nomduhote";
$username = "utilisateur";
$password = "motdepasse";
$database = "nomdelabdd";


// Connection à la base de données 
$conn = mysqli_connect($host, $username, $password, $database);
//$conn = mysqli_connect($host, $username, $password, $database, $port);

// verifier la connection
if (!$conn) {
    die("Connection échoué: " . mysqli_connect_error());
}
?>


