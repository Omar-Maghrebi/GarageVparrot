<?php

require_once "connection_bd.php";

// Gestion de la requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et filtrer les entrées utilisateur
    $type = htmlspecialchars($_POST['type']);
    $time = htmlspecialchars($_POST['time']);
    $text = htmlspecialchars($_POST['text']);
    $price = floatval($_POST['price']); // Assurez-vous que le prix est un nombre décimal
    $imageurl = htmlspecialchars($_POST['imageurl']);

    // Vérifier les champs vides ou invalides
    if (empty($type) || empty($time) || empty($text) || $price <= 0 || empty($imageurl)) {
        echo "Saisie invalide. Veuillez remplir correctement tous les champs.";
        exit;
    }

    // Préparer et exécuter la requête SQL
    $stmt = $conn->prepare("INSERT INTO services (type, time, text, price, imageurl) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdss", $type, $time, $text, $price, $imageurl);

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
