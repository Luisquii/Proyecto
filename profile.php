<?php
require_once './modelos_usuarios.php';
session_start();

$userlistPath = getProducts();

$userData = $userlistPath[$_SESSION["gamertag"]];

echo "Hola " . $userData["gamertag"] ;
echo "Hiciste un login exitoso en brackito el" . date("d/m/Y H:i:s", $_SESSION["start_time"]);
echo "Y eres considerado un usuario con derechos de ". $userData["Utype"] ;
echo "con la descripción de poderes de " .$userData["descripcion"];
?>
