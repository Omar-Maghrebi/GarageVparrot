
<?php


require_once "connection_bd.php";



// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Association des données a leurs types appropriée 

    $name = $_POST['name'];
    $text = $_POST['text'];
    $rating = $_POST['rating'];
   

    // Inserttion des données dans la base de données
    $sql = "INSERT INTO avis (name, text, rating) VALUES ('$name', '$text', '$rating')";
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