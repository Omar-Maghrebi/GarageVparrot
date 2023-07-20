
<?php


require_once "connection_bd.php";



// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Association des données a leurs types appropriée 

    $id = $_POST['id'];
    $valid = $_POST['valid'];

   

    // Inserttion des données dans la base de données
    $sql = "UPDATE avis SET valid=$valid WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
       
        // insertion des données avec succès
        header('Location: index.php');
        exit;
    } else {
        // insertion des données échoué
        echo "Error adding item: " . mysqli_error($conn);
        header('Location: index.php');
        exit;
    }
}

?>