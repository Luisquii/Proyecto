<?php
/* recibirá la petición del formulario y contendrá la lógica
necesaria para realizar el registro del usuario en el sistema y redirigir al listado
de usuarios una vez realizada la acción. Para ello deberá hacer uso de la
funcionalidad del script “modelo_usuarios.php”. */
require_once './modelos_usuarios.php';

$fecha = date_create();

//Guardar el producto
$product = [
    "nombre"        => $_POST["nombre"],
    "apellido"      => $_POST["apellido"],
    "gamertag"      => $_POST["gamertag"],
    "correo"        => $_POST["correo"],
    "password"      => $_POST["password"],
    "equipo"        => $_POST["equipo"],
    "cumpleanos"    => $_POST["cumpleanos"],
    "game"          => $_POST["game"],
    "ID"            => date_timestamp_get($fecha),
    "Utype"         => "Tusuario",
    "descripcion"   => "Tipo de usuario promedio"
];

if(saveProduct($product)){
    //Redirigir al listado
    header('Location: ./control_listado.php');
}
else{
    echo "Ha habido un error al guardar el producto";
}

?>
