<?php
session_start();
// Destruction des valeurs de la session
session_unset();

// Destruction de la session
session_destroy();

// Destruction des cookies de la session
if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Redirection vers la page d'acceuil
header("Location: index.php");
exit;
?>