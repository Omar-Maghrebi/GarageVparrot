<?php
session_start();

require_once "connection_bd.php";

// Gestion de la requête POST
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

    // Utilisation de requêtes préparées
    $sql = "SELECT * FROM logindetails WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row['password'];
        $role = $row['role'];

        // Vérifier le mot de passe à l'aide de password_verify
        if (password_verify($password, $storedHashedPassword)) {
            $_SESSION['role'] = $role;
            $_SESSION['error'] = 0;
            // Rediriger après avoir défini la variable de session
            header('Location: index.php');
            exit;
        } else {
            // Mot de passe invalide, rediriger avec un message d'erreur
            $_SESSION['error'] = 1;
            header('Location: index.php');
            exit;
        }
    } else {
        // Adresse e-mail invalide, rediriger avec un message d'erreur
        $_SESSION['error'] = 1;
        header('Location: index.php');
        exit;
    }
}
?>


