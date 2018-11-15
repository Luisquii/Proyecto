<?php
  session_start();
  require_once "./modelos_usuarios.php";
  $adminData = $_SESSION["userSpecs"];
  if(isset($_SESSION["userSpecs"])&& $adminData["Utype"] == "Admin"){
    //dejar vacio...
  }else{
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
      <p class="intro" id="intro">Perfil</p>
   </header>

   <nav>
      <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <li><a href="./control_listado.php" target="_self" class= "opcions" id="headline">Usuarios</a></li>
        <!-- <li><a href="./.html" target="_self" class= "opcions" id="headline">Admin menu</a></li> -->
      </ul>
    </nav>
</br></br>
<section class="hero">
   <!-- Imagen de Perfil -->

   <form action="./control_formulario.php?opcion=3" method="POST" class="form login">
     <div class="form__field">
       <input type="submit" name="logout" value="Cerrar Sesion">
     </div>
   </form>
   <p> Bienvenido: <?php echo $adminData["gamertag"] ?> </p>
   <img src="./img/AdminIcon.png" alt="Prl" height="80" width="80" />
   <article> Estadisticas de Administrador: ... En desarrollo
   </article>
 </section>
</br></br>
</body>
</html>
