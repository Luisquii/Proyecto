<?php
require_once "./modelos_usuarios.php";
session_start();
$adminData = $_SESSION["userSpecs"];

if (isset($_SESSION["userSpecs"]) && $adminData["Utype"] == "Admin") {
} elseif (isset($_SESSION["userSpecs"])) {
    header("Location: ./Perfil.php");
} else {
    header("Location: ./form-register.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Listado de Productos</title>
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    </head>

    <body>
      <header class="hero">
        <div class="hero-wrap">
        <b class="intro" id="intro">Brackito</b>
      </header>

      <nav>
          <ul class="hero">
            <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
            <li><a href="./login.php" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
            <li><a href="./Perfil.php" target="_self" class= "opcions" id="headline">Perfil</a></li>
          </ul>
        </nav>

<section class="segundo">
  <p> Bienvenido: <?php echo $adminData["gamertag"] ?> </p>
        <table>

            <tr class="hero">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Gamertag</th>
                <th>Correo</th>
                <th>password</th>
                <th>equipo</th>
                <th>cumpleaños</th>
                <th>ID</th>
                <th>User Type</th>
                <th>Descripcion</th>
            </tr>

            <?php
$products = getProducts();
foreach ($products as $product) {
?>
                <tr class="hero">
                    <td class="miembros"><?php echo $product["nombre"]; ?></td>
                    <td class="miembros"><?php echo $product["apellido"]; ?></td>
                    <td class="miembros"><?php echo $product["gamertag"]; ?></td>
                    <td class="miembros"><?php echo $product["correo"]; ?></td>
                    <td class="miembros"><?php echo $product["password"]; ?></td>
                    <td class="miembros"><?php echo $product["equipo"]; ?></td>
                    <td class="miembros"><?php echo $product["cumpleanos"]; ?></td>
                    <td class="miembros"><?php echo $product["ID"]; ?></td>
                    <td class="miembros"><?php echo $product["Utype"]; ?> </td>
                    <td class="miembros"><?php echo $product["descripcion"]; ?> </td>
                </tr>
            <?php
} ?>

        </table>
</section>

<footer class="piepag" >
  <p>Copyright &copy; DAW 2018 - Kitty Kats</p>
</footer>
    </body>
</html>
