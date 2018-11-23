<!-- codigo basado en el codigo de Joe Beason  llamado Flexbox Madness en la pagina https://codepen.io/jbeason/pen/Wbaedb-->
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brakets Tournament</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
</head>

<style media="screen">
  button{
    height: 100px;
    width: 150px;
    margin-left: 50%;
    background-color: #000;
  }
</style>

<body>
  <header class="hero">
  <div class="hero-wrap">
  <?php
session_start();
$jsondata = file_get_contents("torneos.json");
$torneos = json_decode($jsondata, true);
$id = $_GET['id']; //Aquí se debería de recibir el id del torneo por la URL.
//Una vez que se recibe se cambian el índice 0 de torneos por la variable $id
$userData = $_SESSION["userSpecs"];




?>
   <b class="intro" id="intro">Brackito</b>
       <h3 id="headline"><?php echo $torneos[$id - 1]['nombre']; ?></h3>
       <p class="year"><i class="fa fa-star"></i> 2018 <i class="fa fa-star"></i></p>
   <p><?php echo $torneos[$id - 1]['juego']; ?></p>
 </div>
  </header>
  <nav>
        <ul class="hero">
          <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
          <a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a>
        </ul>
      </nav>
  <section id="bracket">
  <div class="container">
  <div class="split split-one">
      <!-- END ROUND ONE -->

      <div class="round round-two current">
          <div class="round-details">Round 1<br/><span class="date"><?php echo $torneos[0]['ronda1']; ?></span></div>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][0] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][0]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][1] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][0]['re2']; ?></span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][2] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][1]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][3] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][1]['re2']; ?></span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][4] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][2]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][5] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][2]['re2']; ?></span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][6] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][3]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][7] ?><span class="score">1</span><?php echo $torneos[$id - 1]['r1Matches'][3]['re2']; ?></li>
          </ul>
      </div>  <!-- END ROUND TWO -->

      <div class="round round-three">
          <div class="round-details">Round 2<br/><span class="date"><?php echo $torneos[$id - 1]['ronda2']; ?></span></div>
          <ul class="matchup">
              <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
          </ul>
      </div>  <!-- END ROUND THREE -->
  </div>

<div class="champion">
      <div class="semis-l">
          <div class="round-details">Semifinales<br/><span class="date"><?php $torneos[$id - 1]['semifinal']; ?></span></div>
          <ul class ="matchup championship">
              <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
          </ul>
      </div>
      <div class="final">
          <i class="fa fa-trophy"></i>
          <div class="round-details">Final <br/><span class="date"><?php echo $torneos[$id - 1]['final']; ?></span></div>
          <ul class ="matchup championship">
              <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
          </ul>
      </div>
      <div class="semis-r">
          <div class="round-details">Semifinales<br/><span class="date"><?php $torneos[$id - 1]['semifinal']; ?></span></div>
          <ul class ="matchup championship">
              <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
          </ul>
      </div>
  </div>


  <div class="split split-two">


      <div class="round round-three">
          <div class="round-details">Round 2<br/><span class="date"><?php echo $torneos[$id - 1]['ronda2']; ?></span></div>
          <ul class="matchup">
              <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
              <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
          </ul>
      </div>  <!-- END ROUND 2 -->

      <div class="round round-two current">
          <div class="round-details">Round 1<br/><span class="date"><?php echo $torneos[$id - 1]['ronda1']; ?></span></div>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][8] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][4]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][9] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][4]['re2']; ?></span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][10] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][5]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][11] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][5]['re2']; ?></span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][12] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][6]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][13] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][6]['re2']; ?></span></li>
          </ul>
          <ul class="matchup">
              <li class="team team-top"><?php echo $torneos[$id - 1]['equipos'][14] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][7]['re1']; ?></span></li>
              <li class="team team-bottom"><?php echo $torneos[$id - 1]['equipos'][15] ?><span class="score"><?php echo $torneos[$id - 1]['r1Matches'][7]['re2']; ?></span></li>
          </ul>
      </div>  <!-- END ROUND 1 -->
  </div>
  </div>
  </section>
  <label for="resultados"  >Registrar resultados</label>
  <div id="sad">
    <?php
    if($userData["Utype"]== "Admin"){
      ?>
      <a class="button" href='registrar_partidas.php?id=<?php echo $id; ?>'>resultados</a>
    <?php }?>

 </div>
  <section class="share">
          <div class="share-wrap">
              <a class="share-icon" href="https://twitter.com/<?php $torneos[$id - 1]['nombre'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
              <a class="share-icon" href="https://facebook.com/<?php $torneos[$id - 1]['nombre'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="share-icon" href="https://mail.itesm.mx<?php $torneos[$id - 1]['nombre'] ?>" target="_blank"><i class="fa fa-envelope"></i></a>
          </div>
  </section>
  <footer class="piepag" >
    <p>Copyright &copy; DAW 2018 - Kitty Kats</p>
  </footer>
</body>
</html>
