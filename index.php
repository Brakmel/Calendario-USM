<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USM.CL</title>
    <link rel="StyleSheet" href="Style/Index.css" type="text/css">
</head>
<body>
<!--Aqui esta nuestro header principal, el cual contiene el titulo y los botones para navegar entre nuestras paginas-->
<header>
    <div class="baul_header">
        <img src="https://raw.githubusercontent.com/Brakmel/jubilant-waffle/main/ProyectoUSM/img/Logo_UTFSM-768x677.png">
    </div>
    <div class="baul_header">
        <h1>Universidad Técnica Federico Santa Maria</h1>
    </div>
</header>
    <div class="panel_button">
        <a href="Php/Administrador.php">
            <input class="input" type="button" value="Administrar salas">
        </a> 
        <a href="">
            <input class="input" type="button" value="Revisar correo">
        </a> 
        <a href="Php/buscar.php">
            <input class="input" type="button" value="Buscar sala semanal">
        </a>
        <a href="Php/buscar1.php">
            <input class="input" type="button" value="Buscar sala mensual">
        </a>  
    </div>
    <!--Categorias, las 3 cartas de comida-->
    <main>
        <div class="baul_categorias">
            <!--Contenedor de la carta Sushi-->
            <div class="baul_sushi">
                <div class="tittle_sushi">
                    <h4 class="h4_sushi">
                        Mensual
                    </h4>
                </div>
                <div class="baul_img_sushi">
                    <a href="Htmls/CartaPizza.php">
                        <img  class="sushi" src="https://cdn.pixabay.com/photo/2016/10/23/17/06/calendar-1763587_960_720.png">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul_sushi">Revisar Mes</p>
                </div>
            </div>
            <!--Contenedor de la carta Gohan-->
            <div class="baul_sushi">
                <div class="tittle_sushi">
                    <h4 class="h4_sushi">
                        Semanal
                    </h4>
                </div>
                <div class="baul_img_sushi">
                    <a href="Htmls/CartaSushi.php">
                        <img  class="sushi" src="https://cdn.pixabay.com/photo/2016/10/23/17/06/calendar-1763587_960_720.png">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul_sushi">Revisar Semana</p>
                </div>
            </div>
            <!--Contenedor de la carta Pizza-->
            <div class="baul_sushi">
                <div class="tittle_sushi">
                    <h4 class="h4_sushi">
                        Mensual y Semanal
                    </h4>
                </div>
                <div class="baul_img_sushi">
                    <a href="">
                        <img  class="sushi" src="https://cdn.pixabay.com/photo/2016/10/23/17/06/calendar-1763587_960_720.png">
                    </a>
                </div>
                <div class="reseña_sushi">
                    <p class="p_baul_sushi">Revisar Mnesual y semanal</p>
                </div>
            </div>
        </div>
    </main>
    <!--Aqui esta el footer-->

</body>
</html>