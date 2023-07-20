<?php
session_start();
require_once "connection_bd.php";

// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Association des données a leurs types appropriée 

   
    $ouverture = $_POST['ouverture'];
    $fermeture = $_POST['fermeture'];
    

    // mise à jour des données dans la base de données
    $sql = "UPDATE horaires SET ouverture = '$ouverture', fermeture = '$fermeture' WHERE id=1";
  
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // insertion des données avec succès
        header('Location: index.php');
       
        exit;
    } else {
        // insertion des données échoué
        echo "Error adding item: " . mysqli_error($conn);
        print         ( $_POST['ouverture']);
       
        header('Location: index.php');
       // exit;
    }
}
?>
