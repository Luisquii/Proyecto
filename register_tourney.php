<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $current_data= file_get_contents('torneos.json');
  $array_data= json_decode($current_data,true);
  $length= sizeof($array_data);
  $extra = array(
    'id' =>$length+1,
    'juego'=>$_POST['juego'],
    'lugar'=>$_POST['lugar'],
    'nombre'=>$_POST['nombre'],
    'descripcion'=>$_POST['desc'],
    'equipos'=>[],
    'ronda1'=>$_POST['Ronda1'],
    'ronda2'=>$_POST['Ronda2'],
    'semifinal'=>$_POST['Semifinal'],
    'final'=>$_POST['Final'],
    'r1Matches'=>[],
    'r2Matches'=>[],
    'semiMatches'=>[],
    'finalMatch'=>[],
    'ganadores'=>[],
    'perdedores'=>[]
  );
  $array_data[]=$extra;
  $final_data=json_encode($array_data);
  if(file_put_contents('torneos.json',$final_data)){
    $message="<h1>Tourney registered successfully</h1>" ;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
  </head>
  <body class="align">

    <div class="grid">
      <h1>Registro de torneo</h1>
      <form  method="POST" class="form login" id="tourneyForm">
        <div class="form__field">
          <label for="lugar"><svg class="icon"></svg><span class="hidden">Lugar</span></label>
          <input type="text" name="lugar" class="form__input" placeholder="lugar" value="" required><br>
        </div>
        <div class="form__field">
          <label for="nombre"><svg class="icon"></svg><span class="hidden">Nombre</span></label>
          <input type="text" name="nombre" class="form__input" placeholder="nombre" value="" required><br>
        </div>
        <div class="form__field">
          <label for="juego"><svg class="icon"></svg><span class="hidden"></span>Juego</label>
          <select class="form_input" name="juego">
            <option value="lol">League of legends</option>
            <option value="ow">Overwatch</option>
            <option value="rl">Rocket League</option>
          </select>
        </div>
        <h4>Ronda 1</h4>
        <div class="form__field">
          <label for="Ronda1"><svg class="icon"></svg><span class="hidden"></span></label>
          <input type="date" name="Ronda1" class="form__input" required placeholder="Ronda 1" value=""><br>
        </div>
        <h4>Ronda 2</h4>
        <div class="form__field">
          <label for="Ronda2"><svg class="icon"></svg><span class="hidden"></span></label>
          <input type="date" name="Ronda2" class="form__input" required placeholder="Ronda 2" value=""><br>
        </div>
          <h4>Semifinal</h4>
        <div class="form__field">
          <label for="Semifinal"><svg class="icon"></svg><span class="hidden"></span></label>
          <input type="date" name="Semifinal" class="form__input" required placeholder="Ronda 3" value=""><br>
        </div>
        <h4>Final</h4>
        <div class="form__field">
          <label for="Final"><svg class="icon"></svg><span class="hidden"></span></label>
          <input type="date" name="Final" class="form__input" required placeholder="Ronda 3" value=""><br>
        </div>
        <textarea rows="4" cols="50" name="desc" form="tourneyForm">
        Descripción del torneo</textarea>
        <!--Submit button-->
        <div class="form__field">
            <input type="submit" value="registrar" href="Index.html">
        </div>
        <br><br>
      </form>
    </div>
    <footer class="piepag" >
      <p>Copyright &copy; DAW 2018 - Kitty Kats</p>
    </footer>
  </body>
</html>
