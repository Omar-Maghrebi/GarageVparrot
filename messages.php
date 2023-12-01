<?php

require_once "connection_bd.php";

// Gestion de la requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valider et filtrer les entrées utilisateur
    $title = htmlspecialchars($_POST['title']);
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : '';
    $number = preg_match('/^\d+$/', $_POST['number']) ? $_POST['number'] : '';
    $text = htmlspecialchars($_POST['text']);

    // Vérifier les champs vides ou invalides
    if (empty($title) || empty($name) || empty($email) || empty($number) || empty($text)) {
        echo "Saisie invalide. Veuillez remplir tous les champs.";
        exit;
    }

    // Préparer et exécuter la requête SQL
    $stmt = $conn->prepare("INSERT INTO messages (title, name, email, number, text) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $name, $email, $number, $text);

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
