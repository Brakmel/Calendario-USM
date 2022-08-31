<?php 
    include("conexion.php");
    $con=conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="busqueda">
        <input type="submit" name="enviar" value="Buscar por fecha">
    </form>

    <?php
    if(isset($_GET['enviar'])) {
        $busqueda = $_GET['busqueda'];

        $consulta = $con->query("SELECT * FROM sushi WHERE imagen LIKE '%$busqueda%'");

        while ($row = $consulta->fetch_array()) {
            echo $row['imagen'].'<br>';
        }
    }

    ?>
</body>
</html>