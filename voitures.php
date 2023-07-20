<?php
require_once "connection_bd.php";

$result = mysqli_query($conn, $sql);

// Gestion de la requete POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      $model = $_POST['model'];
      $date = $_POST['date'];
      $distance = $_POST['distance'];
      $price = $_POST['price'];
      $imageurl = $_POST['imageurl'];


      // Insertion dans la base de données
      $sql = "INSERT INTO cars (model, date, distance, price, imageurl) VALUES ('$model', '$date', '$distance', '$price', '$imageurl')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
            // succées
            header('Location: index.php');
            exit;
        } else {
            // échec
            echo "Error adding item: " . mysqli_error($conn);
            header('Location: index.php');
            exit;
        }
    }
?>