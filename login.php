<?php
session_start();

require_once "connection_bd.php";



// Gestion de la requete POST
if (isset($_POST['email']) and isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM LoginDetails WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $resultPassword = $row['password'];
        $role = $row['role'];
        if ($password == $resultPassword) {
            echo "<script>
            alert('Compte admin');
        </script>";
        $_SESSION['role'] = $role;
            header('Location: index.php');
            exit;
        } else {
                
            header('Location: index.php');
            exit;
              
            }
        }
    } 
?>