<!-- Información de torneo -->
<!DOCTYPE html>
<html lang="es">
<head>
    <title> Torneo </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="./main.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>
    <header class="hero">
        <div class="hero-wrap">
          <p class="intro" id="intro">Brackcito</p>
       </header>

       <nav>
          <ul class="hero">
            <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
            <li><a href="./login.html" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
            <li><a href="./Perfil.html" target="_self" class= "opcions" id="headline">Perfil</a></li>
          </ul>
        </nav>
</br></br>
<?php
session_start();
$team= "equipo 1";//$_SESSION['equipo'];
$jsondata= file_get_contents("torneos.json");
$torneos= json_decode($jsondata,true);
$output="<ul>";
$userData = $_SESSION["userSpecs"];
$equipo= $userData["equipo"];
$id=$_GET['id'];
foreach ($torneos as $torneo) {
  if($torneo['id']==$id){
    ?>
      <section class="hero">
        <p>Torneo: <?php echo $torneo['nombre'];?></p>
        <p>Lugar <?php echo $torneo['lugar'];?></p>
        <p>Ronda 1: <?php echo $torneo['ronda1'];?></p>
        <p>Ronda 2: <?php echo $torneo['ronda2'];?></p>
        <p>Semifinal: <?php echo $torneo['semifinal'];?></p>
        <p>Final: <?php echo $torneo['final'];?></p>
        <p>Reglas: <?php echo $torneo['descripcion'];?></p>
      </section>
    <?php
   }
   else{
     continue;
   }
  }
?>
<section class="Segundo">
 <a href='#' class='button' onclick="inscribir();">Inscribir Torneo</a>
 <!--Aqui falta que al hacer click el $id se pase por la Url a la página de Brakets.php-->
 <a href='Brakets.php?id=<?php echo $id; ?>' class='button'>Brackets</a>
</section>

<script type="text/javascript">
function inscribir(){
  //Insertar la función de AJAX aquí.
  $.post( "modelo_torneos.php",{idTorneo:<?php echo $id ?>,team:"<?php echo $equipo  ?>",action:"storeTeam"},function(data){
  },"json");
  if("json"){
    alert("Equipo inscrito");
  }
}
</script>

<footer class="piepag" >
  <p>Copyright &copy; DAW 2018</p>
  Luis Quiroga A00513223 - Josué Valdivia A00398731 - Luis Garcia A01350241<br/>
  Laboratorio 8 - DAW<br/>
  Erik de Jesús Sánchez
</footer>
</body>

</html>
