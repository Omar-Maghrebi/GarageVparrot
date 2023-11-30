<?php
session_start();

require_once "connection_bd.php";

// Gestion de la requete POST
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM LoginDetails WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedHashedPassword = $row['password'];
        $role = $row['role'];

        // Verify the password using password_verify
        if (password_verify($password, $storedHashedPassword)) {
            $_SESSION['role'] = $role;

            echo "<script>
                alert('Login successful');
            </script>";

            header('Location: index.php');
            exit;
        } else {
            echo "<script>
                alert('Invalid email or password');
            </script>";

            header('Location: index.php');
            exit;
        }
    }
}
?>
