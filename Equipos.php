<!-- Perfil de usuario -->
<?php
  session_start();
  require_once "./modelos_usuarios.php";
  //require_once "";
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
    <title> Equipos </title>
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
      <b class="intro" id="intro">Equipos</b>
   </header>

   <nav>
      <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <li><a href="./login.php" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
        <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
      </ul>
    </nav>
<br>

 <section class="hero">
    <!-- Imagen de Perfil -->
    <b class="intro" > Equipos Registrados </b>
    <br>

    <?php
    $products = getProducts();
    $single = array();
    $flag = 0;
    foreach($products as $product){
      foreach($single as $equipo){
        if ($equipo == $product["equipo"]){
          $flag = 1;
        }


      }
      if($flag == 0 ){
        array_push($single, $product["equipo"]);
        ?>

        <a href="./Equipo.php?team=<?php echo $product["equipo"] ;  ?>" target="_self" class= "opcions" ><?php echo $product["equipo"] ;  ?></a>
        <br>

        <?php
      }
      $flag = 0;
    }?>


  </section>
<br>
<footer class="piepag" >
  <p>Copyright &copy; DAW 2018 - Kitty Kats</p>
</footer>

</body>
</html>
