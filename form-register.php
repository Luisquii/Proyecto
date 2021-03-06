<?php
session_start();
if (isset($_SESSION["userSpecs"])) {
    header("Location: ./Perfil.php");
}
$hoy = date("Y-m-d");

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
      <h1>Forma de registro</h1>
      <form action="./control_formulario.php?opcion=2" method="POST" class="form login">
        <div class="form__field">
          <label for="nombre"><svg class="icon"></svg><span class="hidden">Usuario</span></label>
          <input type="text" name="nombre" class="form__input" placeholder="Nombre" value="" required><br>
        </div>

        <div class="form__field">
            <label for="apellido"><svg class="icon"></svg><span class="hidden">Usuario</span></label>
            <input type="text" name="apellido" class="form__input" required placeholder="Apellido" value="" required><br>
        </div>

        <div class="form__field">
            <label for="gamertag"><svg class="icon"></svg><span class="hidden">Usuario</span></label>
            <input type="text" name="gamertag" class="form__input" required placeholder="Gamertag" value="" required><br>
        </div>

        <div class="form__field">
            <label for="correo"><svg class="icon"></svg><span class="hidden">Usuario</span></label>
            <input type="email" name="correo" class="form__input" required placeholder="Email" value="" required><br>
        </div>

        <div class="form__field">
          <label for="password"><svg class="icon"> </svg><span class="hidden">Contraseña</span></label>
          <input id="login__password" type="password" required name="password" class="form__input" placeholder="Contraseña" required><br>
        </div>

        <div class="form__field">
          <label for="equipo"><svg class="icon"></svg><span class="hidden">Contraseña</span></label>
          <input type="text" id="equipo" name="equipo"  placeholder="Equipo" class="form__input" value=""><br>
        </div>

        <div class="form__field">
          <label for="cumpleanos"><svg class="icon"></svg><span class="hidden">Contraseña</span></label>
          <input type="date" name="cumpleanos" class="form__input" required placeholder="Fecha de Nacimiento" value="" required max=<?php echo $hoy; ?>><br>
        </div>

        <div class="form__field">
            <input type="submit" value="registrar" href="index.html">
        </div>
        <br>
      </form>

    </div>
  </body>
</html>
