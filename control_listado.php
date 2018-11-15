<?php
require_once "./modelos_usuarios.php";
session_start();
$adminData = $_SESSION["userSpecs"];
/*if(isset($_SESSION["userSpecs"])){
    header("Location: ./Perfil.php");
}
else{
  header("Location: ./form-register.php");
}*/

if(isset($_SESSION["userSpecs"]) && $adminData["Utype"] == "Admin"){

}elseif(isset($_SESSION["userSpecs"])){
    header("Location: ./Perfil.php");
}
else{
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
        <p class="intro" id="intro">Brackito</p>
      </header>

      <nav>
          <ul class="hero">
            <li><a href="./Index.html" target="_self" class= "opcions" id="headline">Home</a></li>
            <li><a href="./login.php" target="_self" class= "opcions" id="headline">Iniciar Sesión</a></li>
            <li><a href="./Perfil.html" target="_self" class= "opcions" id="headline">Perfil</a></li>
          </ul>
        </nav>

<section class="Primero">
  <p> Bienvenido: <?php echo $adminData["gamertag"] ?> </p>
        <table border="1" align="center">

            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Gamertag</th>
                <th>Correo</th>
                <th>password</th>
                <th>equipo</th>
                <th>cumpleaños</th>
                <th>game</th>
                <th>ID</th>
                <th>User Type</th>
                <th>Descripcion</th>
            </tr>

            <?php
            $products = getProducts();

            foreach($products as $product){
            ?>
                <tr>
                    <td><?php echo $product["nombre"]; ?></td>
                    <td><?php echo $product["apellido"]; ?></td>
                    <td><?php echo $product["gamertag"]; ?></td>
                    <td><?php echo $product["correo"]; ?></td>
                    <td><?php echo $product["password"]; ?></td>
                    <td><?php echo $product["equipo"]; ?></td>
                    <td><?php echo $product["cumpleanos"]; ?></td>
                    <td><?php echo $product["game"]; ?></td>
                    <td><?php echo $product["ID"]; ?></td>
                    <td><?php echo $product["Utype"];?> </td>
                    <td><?php echo $product["descripcion"];?> </td>
                </tr>
            <?php } ?>

        </table>
</section>

  <footer class="piepag" >
    <p>Copyright &copy; DAW 2018</p>
    Luis Quiroga A00513223 - Josué Valdivia A00398731 - Luis Garcia A01350241<br/>
    Laboratorio 8 - DAW<br/>
    Erik de Jesús Sánchez
  </footer>
    </body>
</html>
