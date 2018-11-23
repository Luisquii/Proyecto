<?php
session_start();
require_once "./modelos_usuarios.php";
require_once "./modelo_torneos.php";
$adminData = $_SESSION["userSpecs"];
if (isset($_SESSION["userSpecs"]) && $adminData["Utype"] == "Admin") {
    //dejar vacio...

}
else {
    header("Location: ./login.php");
}
$userData = $_SESSION["userSpecs"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title> Perfil </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="./main.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
</head>

<body>

  <header class="hero">
    <div class="hero-wrap">
      <b class="intro" id="intro">Perfil</b>
   </header>

   <nav>
      <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <li><a href="./control_listado.php" target="_self" class= "opcions" id="headline">Usuarios</a></li>
        <!-- <li><a href="./.html" target="_self" class= "opcions" id="headline">Admin menu</a></li> -->
      </ul>
    </nav>
<section class="hero">
   <!-- Imagen de Perfil -->

    <form action="./control_formulario.php?opcion=3" method="POST" class="form login">
            <div class="form__field">
                <input type="submit" class="button" name="logout" value="Cerrar Sesion">
            </div>
    </form>

   <b class="hero"> Bienvenido: <?php echo $adminData["gamertag"] ?> </b>
   <br>
   <img src="./img/AdminIcon.png" alt="Prl" height="80" width="80" />

   <br>
   <a class="opcions"> Estadisticas de Administrador </a>
   <br>
   <a class="opcions"> Procentaje de Victorias: </a>
        <?php

        $jsondata = file_get_contents("torneos.json");
        $torneos = json_decode($jsondata, true);
         $i = 0;
         $j = 0;

         foreach($torneos as $torneo){
            //echo $torneo;
            //echo implode(' ', $torneo);

            foreach($torneo["ganadores"] as $winner){
                //echo $winner;
                if($winner == $userData["equipo"]){
                    $i = $i + 1;
                }
            }

            foreach($torneo["perdedores"] as $losser){
                //echo $losser;
                if($losser == $userData["equipo"]){
                    $j = $j + 1;
                }
            }
            if($i == 0 && $j == 0){
             $porcentaje = 0;
            } else {
            $porcentaje = $i / ($i + $j)*100;
            }
         }
        ?>
        <br>
        <a class="opcions"> <?php echo $porcentaje; ?> %</a>
 </section>
 <footer class="piepag" >
   <p>Copyright &copy; DAW 2018 - Kitty Kats</p>
 </footer>
</body>
</html>
