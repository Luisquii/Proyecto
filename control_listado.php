//control _listado.php: este script es opcional, contiene la lógica relacionada con
//la interfaz del listado de usuarios. Si consideras que es suficiente con usar las
//funciones de “modelo_usuarios.php” para lograr su correcto funcionamiento, es
//válido.
<?php
require_once "./modelos_usuario.php";
?>
   
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Listado de Productos</title>
    </head>
    <body>

        <table border="1">
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
                    <td><?php echo $product["cumpleaños"]; ?></td>
                    <td><?php echo $product["game"]; ?></td>
                    <td><?php echo $product["ID"]; ?></td>
                    
                </tr>
            <?php } ?>

        </table>

    </body>
</html>
