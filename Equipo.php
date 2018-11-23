
<!-- Perfil de equipo -->
<?php
session_start();
require_once "./modelos_usuarios.php";
if (isset($_SESSION["userSpecs"])) {
    //dejar vacio...

} else {
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
      <b class="intro" id="intro">Equipo</b>
   </header>

   <nav>
      <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <li><a href="./login.php" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
        <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
      </ul>
    </nav>

 <section class="hero">
    <!-- Imagen de Perfil -->
    <?php $equipo = $_GET["team"]; ?>
    <p class="intro" > <?php echo $equipo; ?></p> <br>
    <article style="margin-top:3%"> <img src="./img/<?php echo $equipo; ?>.jpg" alt="imagen del equipo" height="150" width="150"/> </article> <br>

    <article class="miembros"> Miembros
      <br>
      <?php
$products = getProducts();
foreach ($products as $product) {
    if ($product["equipo"] == $equipo) {
?>

          <a class= "opcions" ><?php echo $product["gamertag"]; ?></a>
          <br>

          <?php
    }
} ?>
    </article>
  </section>
    <br>
<section class="hero">
  <b class="Torneo" style="margin-top:7%"> Torneos inscritos</b>
    <br>
    <?php
            $jsondata = file_get_contents("torneos.json");
            $torneos = json_decode($jsondata, true);
            $i = 0;
            $j = 0;


            foreach($torneos as $torneo){
                foreach($torneo["equipos"] as $equipos){
                    if($equipos == $equipo){?>
                    <a href="./Torneoinfo.php?id=<?php echo $torneo["id"] ;  ?>" target="_self" class= "opcions" ><?php echo $torneo["nombre"] ;  ?></a>
                    <br>
            <?php   }
                }
            }
    ?>
  </article>
  <footer class="piepag" >
    <p>Copyright &copy; DAW 2018 - Kitty Kats</p>
  </footer>
</body>
</html>
