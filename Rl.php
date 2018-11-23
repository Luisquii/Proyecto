<!-- Game Page RL -->
<!DOCTYPE html>
<html lang="es">

<!-- HEADER -->
 <head>
   <title> Rocket League </title>
   <meta charset="utf-8"/>
   <link rel="stylesheet" type="text/css" href="./main.css"/>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>

   <style>
      .banner-image {
        z-index: 0;
        background-size: cover;
        background-image: url('./img/BackRL.jpg');
        background-color: #fff;
      }
      a{
        color: #5CCA87;
      }
      </style>
 </head>

<!-- BODY -->
 <body>
    <header class="hero">
        <div class="hero-wrap">
          <p class="intro" id="intro">Rocket League</p>
    </header>

    <nav>
        <ul class="hero">
          <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
          <li><a href="./login.php" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
          <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
          <li><a href="./Equipos.php" target="_self" class= "opcions" id="headline">Equipos</a></li>
        </ul>
      </nav>
 </br></br>
 <?php
 session_start();
 $jsondata= file_get_contents("torneos.json");
 $torneos= json_decode($jsondata,true);
 $output= "<ul>";
 foreach ($torneos as $torneo) {
   if ($torneo['juego']=="rl") {
     ?>
     <a href='TorneoInfo.php?id=<?php echo $torneo['id'] ?>' target='_self' class='banner'>
             <div class='banner-fill banner-image'></div>
             <div class='banner-fill banner-content-container'>
               <div class='banner-content'>
                 <span class='banner-header'><?php echo $torneo['nombre'] ?></span>
                 <span><?php echo $torneo['lugar'] ?></span>
               </div>
             </div>
           </a>
         </br>
     <?php
    }
    else{
      continue;
    }
   }
 ?>
</br></br>
 <section class="Segundo">
   <a href="register_tourney.php" class='button'>Crear torneo</a>
 </section>
 <footer class="piepag" >
   <p>Copyright &copy; DAW 2018</p>
   Luis Quiroga A00513223 - Josué Valdivia A00398731 - Luis Garcia A01350241<br/>
   Laboratorio 8 - DAW<br/>
   Erik de Jesús Sánchez
 </footer>
 </body>

</html>
