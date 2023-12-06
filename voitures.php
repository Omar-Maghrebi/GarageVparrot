<?php

require_once "connection_bd.php";

// Gestion de la requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et filtrer les entrées utilisateur
    $model = htmlspecialchars($_POST['model']);
    $date = intval($_POST['date']);
    $distance = intval($_POST['distance']); // Assurez-vous que la distance est un nombre entier
    $price = intval($_POST['price']); // Assurez-vous que le prix est un nombre décimal
    $imageurl = htmlspecialchars($_POST['imageurl']);

    // Vérifier les champs vides ou invalides
    if (empty($model) || empty($date) || $distance <= 0 || $price <= 0 || empty($imageurl)) {
        echo "Saisie invalide. Veuillez remplir correctement tous les champs.";
        exit;
    }

    // Préparer et exécuter la requête SQL de manière sécurisée
    $stmt = $conn->prepare("INSERT INTO cars (model, date, distance, price, imageurl) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("siiis", $model, $date, $distance, $price, $imageurl);

    $result = $stmt->execute();

    if ($result) {
        // Insertion réussie
        header('Location:index.php');
        exit;
    } else {
        // Échec de l'insertion
        echo "Une erreur s'est produite. Veuillez réessayer ultérieurement.";
        error_log("Erreur lors de l'ajout : " . $stmt->error);
        header('Location:index.php');
        exit;
    }
}
?>
