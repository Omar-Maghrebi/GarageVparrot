
<?php


require_once "connection_bd.php";



// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Association des données a leurs types appropriée 

    $email = $_POST['email'];
    $password = $_POST['password'];

  

    // Inserttion des données dans la base de données
    $sql = "INSERT INTO LoginDetails (email, password) VALUES ('$email', '$password')";
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