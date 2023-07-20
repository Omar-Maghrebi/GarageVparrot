<?php
require_once "connection_bd.php";



// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Association des données a leurs types appropriée 
    $type = $_POST['type'];
    $time = $_POST['time'];
    $text = $_POST['text'];
    $price = $_POST['price'];
    $imageurl = $_POST['imageurl'];

   

    // Inserttion des données dans la base de données
    $sql = "INSERT INTO services (type, time, text, price, imageurl) VALUES ('$type', '$time', '$text', '$price', '$imageurl')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // succées
        header('Location: index.php');
        exit;
    } else {
        // échec
        echo "Error adding item: " . mysqli_error($conn);
        header('Location: index.php');
        exit;
    }
}
?>