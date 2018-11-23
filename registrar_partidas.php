<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title> Registro de partidas </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="./main.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>

  <style media="screen">
    form{
      color: #5CCA87;
      font-size: 30px;
      text-align: center;
    }
    select{
      text-align: center;
      font-size: 15px;
    }
  </style>
  <body>
    <?php
    session_start();
    $id = $_GET['id']; //$_GET['id'];Aquí también se debe de recibir el id del torneo por medio de la URL

    ?>
    <header class="hero">
        <div class="hero-wrap">
          <b class="intro" id="intro">Brackcito</b>
    </header>
    <nav>
        <ul class="hero">
        <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
        <li><a href="./login.html" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
        <li><a href="./Perfil.html" target="_self" class= "opcions" id="headline">Perfil</a></li>
        </ul>
    </nav>

      <form class="" action="modelo_torneos.php?idTorneo=<?php echo $id; ?>&action=storeMatch" target="_self" method="post" >
        <select class="" name="round">
          <option value="r1">Round 1</option>
          <option value="r2">Round 2</option>
          <option value="semi">Semifinal</option>
          <option value="final">Final</option>
        </select><br>
        <label for="equipo1">Equipo 1</label>
        <input type="text" name="equipo1" value="">
        <label for="win1">Ganador</label>
        <input type="radio" name="win" value="equipo1">
        <label for="equipo2">Equipo 2</label>
        <input type="text" name="equipo2" value="">
        <label for="win2">Ganador</label>
        <input type="radio" name="win" value="equipo2"><br>
        <label for="stats1">Estadísticas equipo 1</label>
        <input type="text" name="stats1" value="">
        <label for="stats2">Estadísticas equipo 2</label>
        <input type="text" name="stats2" value=""><br>
        <input type="submit" name="" value="Registrar">
      </form>
      <script type="text/javascript">
          var count=1;
          function conteo(){
            count++;
            console.log(count);
          }
      </script>
  </body>
</html>
