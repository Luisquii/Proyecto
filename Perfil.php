<!-- Perfil de usuario -->
<?php
  session_start();
  require_once "./modelo_torneos.php";
  require_once "./modelos_usuarios.php";
  if(isset($_SESSION["userSpecs"])){
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
<!--  -->
<body>

  <header class="hero">
    <div class="hero-wrap">
      <p class="intro" id="intro">Perfil</p>
   </header>

   <nav>
      <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <!-- <li><a href="./login.html" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li> -->
        <li><a href="./Lol.php" target="_self" class= "opcions" id="headline">LoL</a></li>
        <li><a href="./Ow.php" target="_self" class= "opcions" id="headline">OW</a></li>
        <li><a href="./Rl.php" target="_self" class= "opcions" id="headline">RL</a></li>
        <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
      </ul>
    </nav>
</br></br>

 <section class="hero">
    <!-- Imagen de Perfil -->

    <form action="./control_formulario.php?opcion=3" method="POST" class="form login">
      <div class="form__field">
        <input type="submit" class="button" name="logout" value="Cerrar Sesion">
      </div>
    </form>
    <article class="lema"> Nombre de usuario: <?php echo $userData["gamertag"] ?> </article>
    <br> <br>
    <img src="./img/IconP.png" alt="Prl" height="80" width="80" />
    <br> <br>
    <article class= "lema"> Miembro en: <?php echo $userData["equipo"] ?> </article>
    <br> <br>
    <a class= "hero"> Estadisticas Genericas de videojuegos </a>




  </section>
<br><br>

<section class="Info">
  <p> Torneos Inscritos </p>
  <article>
    ITESM QRO <br>
    DAW <br>
  </article>



</body>



</html>
