<?php
/* recibirá la petición del formulario y contendrá la lógica
necesaria para realizar el registro del usuario en el sistema y redirigir al listado
de usuarios una vez realizada la acción. Para ello deberá hacer uso de la
funcionalidad del script “modelo_usuarios.php”. */
$nombre = explode( $_GET["nombre"]);
$apellido = explode( $_GET["apellido"]);
$gamertag = explode( $_GET["gamertag"]);
$correo = explode( $_GET["correo"]);
$password = explode( $_GET["password"]);
$confirma = explode( $_GET["confirma"]);
$equipo = explode( $_GET["equipo"]);
$cumpleaños = explode( $_GET["cumpleaños"]);
$game = explode( $_GET["game"]);

?>
