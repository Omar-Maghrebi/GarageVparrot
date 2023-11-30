<?php

require_once "connection_bd.php";

// Gestion de la requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et filtrer les entrées utilisateur
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : '';
    $password = $_POST['password'];

    // Vérifier les champs vides ou invalides
    if (empty($email) || empty($password)) {
        echo "Saisie invalide. Veuillez remplir correctement tous les champs.";
        exit;
    }

    // Utiliser une fonction de hachage sécurisée (comme password_hash) pour stocker les mots de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Préparer et exécuter la requête SQL
    $stmt = $conn->prepare("INSERT INTO LoginDetails (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    $result = $stmt->execute();

    if ($result) {
        // Insertion réussie
        header('Location: index.php');
        exit;
    } else {
        // Échec de l'insertion
        echo "Une erreur s'est produite. Veuillez réessayer ultérieurement.";
        error_log("Erreur lors de l'ajout : " . $stmt->error);
        header('Location: index.php');
        exit;
    }
}
?>
