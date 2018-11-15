<!-- Perfil de usuario -->
<?php
  session_start();
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
        <li><a href="./Lol.html" target="_self" class= "opcions" id="headline">LoL</a></li>
        <li><a href="./Ow.html" target="_self" class= "opcions" id="headline">OW</a></li>
        <li><a href="./Rl.html" target="_self" class= "opcions" id="headline">RL</a></li>
        <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
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
    <p> Nombre de usuario: <?php echo $userData["gamertag"] ?> </p>
    <img src="./img/IconP.png" alt="Prl" height="80" width="80" />
    <article> Miembro en: <?php echo $userData["equipo"] ?> </article>
    <article> Estadisticas Genericas de videojuegos
    </br> Los siguientes datos siguen siendo fake
      </br> KDA Promedio: 4.38:1
      </br> Porcentaje de victorias: 56%
      </br> CS = 5.4
      </br> MMR = 1470
      </br> División: Diamante 2
      </br> Rol mas jugado: Central
    </article>
  </section>
</br></br>

<section class="Info">
  <p> Torneos Inscritos </p>
  <article>
    ITESM QRO </br>
    DAW </br>
  </article>



</body>



</html>
