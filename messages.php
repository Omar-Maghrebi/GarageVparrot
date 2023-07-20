
<?php


require_once "connection_bd.php";



// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Association des données a leurs types appropriée 

    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $text = $_POST['text'];
   

    // Inserttion des données dans la base de données
    $sql = "INSERT INTO Messages (title, name, email, number, text) VALUES ('$title', '$name', '$email', '$number', '$text')";
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