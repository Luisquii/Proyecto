<?php
require_once './modelos_usuarios.php';
session_start();
$fecha = date_create();
//registro o LogIn o LogOut
$regLiLo = $_GET['opcion'];

function loginAfterRegister($gatag, $pass){
  $product=[
    "gamertag" => $gatag,
    "password" => $pass,
  ];
  $loginStatus = loginStatus($product);
  if($loginStatus){
    header('Location: ./Perfil.php');
  }
}

if($regLiLo == 1){
  $product=[
    "gamertag" => $_POST["gamertag"],
    "password" => $_POST["password"],
  ];
  $loginStatus = loginStatus($product);
  if($loginStatus){
    header('Location: ./Perfil.php');
  }else{
    header('Location; ./Index.html');
  }
}

if($regLiLo==2){
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
      "Utype"         => "Usuario",
      "descripcion"   => "Tipo de usuario promedio"
  ];

  if(saveProduct($product)){
      //Redirigir al listado
      loginAfterRegister($_POST["gamertag"], $_POST["password"]);
      //header('Location: ./Perfil.php');
  }
  else{
      header("Location: ./form-register.html");
      //echo "Ha habido un error: el gamertag ya existe";
  }

}

if($regLiLo==3){
  session_destroy();;
	header('Location: ./index.html');
}

?>
