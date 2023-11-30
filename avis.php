<?php

require_once "connection_bd.php";

// Gestion de la requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et filtrer les entrées utilisateur
    $name = htmlspecialchars($_POST['name']);
    $text = htmlspecialchars($_POST['text']);
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;

    // Vérifier les champs vides ou invalides
    if (empty($name) || empty($text) || $rating < 1 || $rating > 5) {
        echo "Saisie invalide. Veuillez remplir correctement tous les champs.";
        exit;
    }

    // Préparer et exécuter la requête SQL
    $stmt = $conn->prepare("INSERT INTO avis (name, text, rating) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $text, $rating);

    $result = $stmt->execute();

    if ($result) {
        // Insertion réussie
        header('Location: index.php');
        exit;
    } else {
        // Échec de l'insertion
        echo "Une erreur s'est produite. Veuillez réessayer ultérieurement.";
        error_log("Erreur lors de l'ajout : " . $stmt->error);
        exit;
    }
}
?>
