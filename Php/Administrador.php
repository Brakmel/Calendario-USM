<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM sushi";
    $query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Sushi</title>
    <link rel="StyleSheet" href="../Style/css.css" type="text/css">
</head>
<body>
<header>
    <div class="baul_header">
        <div class="titulo">
            <h1>Universidad Técnica Federico Santa Maria</h1>
            <h1 class="Titulo_principal"></h1>
        </div>
    </div>
    <div class="baul_header">
        <div class="sub_titulo">
            <h2>Agrega, Borra, Modifica y Busca por fecha...</h2>
        </div>
    </div>    
</header>
        <div class="panel_button">
            <a href="Administrador1.php">
                <input class="input" type="button" value="Mes">
            </a>
            <a href="../index.php">
                <input class="input" type="button" value="Volver atras">
            </a>  
        </div>
    <form action="insertar.php" method="POST" enctype="multipart/formdata" required>
        <input type="text"  name="Titulo" placeholder="Nombre" required>
        <input type="text"  name="descripcion" placeholder="Fecha" required>
        <input type="text"  name="imagen" placeholder="Hora" required>
        <input type="text"  name="precio" placeholder="Sala" required>
        <input type="submit" value="Generar tabla">
    </form>
    <table>
            <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['Titulo']?></th>
                        <th><?php  echo $row['descripcion']?></th>
                        <th><?php  echo $row['imagen']?></th>
                        <th><?php  echo $row['precio']?></th>
                        <th><a href="actualizar.php?id=<?php echo $row['Titulo'] ?>" >Modificar</a></th>
                        <th><a href="delete.php?id=<?php echo $row['Titulo'] ?>" >Eliminar</a></th>                                          
                    </tr>
                <?php 
                    }
                ?>
            </tbody>
    </table>
</body>
</html>