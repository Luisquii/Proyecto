
<!-- Perfil de equipo -->
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
    <title> Equipo </title>
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
      <p class="intro" id="intro">Equipo</p>
   </header>

   <nav>
      <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <li><a href="./login.php" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
        <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
      </ul>
    </nav>
</br></br>

 <section class="hero">
    <!-- Imagen de Perfil --><?php $equipo = $_GET["team"]; ?>
    <p class="intro" > <?php echo $equipo;  ?></p> <br>
    <article style="margin-top:3%"> <img src="./img/<?php echo $equipo;  ?>.png" alt="imagen del equipo" height="150" width="150"/> </article> <br>

    <article class="miembros"> Miembros
      <br>
      <?php
      $products = getProducts();

      foreach($products as $product){
        if($product["equipo"] == $equipo ){
          ?>

          <a class= "opcions" ><?php echo $product["gamertag"] ;  ?></a>
          <br>

          <?php }

      }?>
    </article>
  </section>
</br></br>

<section class="hero">
  <article class="Torneo">
    Torneos inscritos:</article> </br>
    <!-- aqui va un for each, pero no puedo llamar los dos phps de modelos_usuarios y modelo_torneos porque las dos usar saveproducts() porfa arreglen eso  -->
    <article class="Torneo"><a href="./Brakets.php">Uleague - 2018 </a></article>  </br>
    <article class="Torneo"><a href="./Brakets.php">QROleague - 2018 </a></article> </br>
  </article>



</body>



</html>
