<?php
session_start();

require_once "connection_bd.php";

// Gestion de la requête POST
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM logindetails WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row['password'];
        $role = $row['role'];

        // Vérifier le mot de passe à l'aide de password_verify
        if (password_verify($password, $storedHashedPassword)) {
            $_SESSION['role'] = $role;

            // Rediriger après avoir défini la variable de session
            header('Location: index.php');
            exit;
        } else {
            // Mot de passe invalide, rediriger avec un message d'erreur
            header('Location: index.php?login_error=1');
            exit;
        }
    } else {
        // Adresse e-mail invalide, rediriger avec un message d'erreur
        header('Location: index.php?login_error=1');
        exit;
    }
}
?>

