<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="perfil.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/ef259853b6.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="icon" href="icono.jpg">
	<title>Perfil</title>
</head>
<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
	<div class="fondo">
        <nav>
            <ul class="nav__ul">
                <li class="nav__ul-li"><i class="fab fa-product-hunt"></i><a href="index.html">Inicio</a></li>
                <li class="nav__ul-li"><i class="fas fa-home"></i><a href="productos.php">Servicios</a></li>
                <li class="nav__ul-li-inicio"><i class="fab fa-weixin"></i><a href="sobrenosotros.html">Sobre Nosotros</a></li>
            </ul>
            <div class="contenedor">
                <form action="#" id="form-buscar">
                    <input type="text" placeholder="Buscar" class="buscar">
                </form>
                <button id="btn-buscar">Buscar</button>
                <ul class="nav__ul2">
                    <li class="nav__ul2-li"><a href="#"><i class="fas fa-search lupa"></i></a></li>
                    <li class="nav__ul2-li"><a href="verificarperfil.php"><i class="fas fa-user-circle perfil"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <?php
        session_start();
        $n = $_SESSION['username'];
        echo "
        <form action='cerrarsesion.php'>
        <h2 style='color: #fff; text-align: left; font-size: 30px; margin: 10px;'>Nombre De Usuario: $n</h2>
        <button style='background-color: blue; border: none; outline: none; margin: 5px; color: #fff; width: 100px; height: 30px; margin-left: 10px;'>Cerrar Sesion</button>
        <form/>
        ";
    ?>
    <div class="footer">
        <div class="inffo">
            <h2 class="titulo-paradise">PARADISE</h2>
            <p>
                Somos una empresa dedicada a la venta de casas mediante un entorno web.
            </p>
            <a href="#" class="iconos"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="iconos"><i class="fas fa-envelope"></i></a>
        </div>
        <div class="inffo">
            <h2 class="titulo-navegacion">NAVEGACIÓN</h2>
            <ul class="ul__navegacion">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="sobrenosotros.html">Sobre Nosotros</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="#fondo2">Contacto</a></li>
            </ul>
        </div>
        <div class="inffo">
            <h2 class="titulo-ubicacion">UBICACIÓN</h2>
            <ul class="ul__ubicacion">
                <li>Real de Pozos No. 130</li>
                <li>Fracc. Minas del Real, C.P.78396</li>
                <li>San Luis Potosí,S.L.P, México.</li>
            </ul>
        </div>
        <div class="line"></div>
        <h2 class="copy">© Copyright 2021 - Todos los derechos reservados</h2>
    </div>
</body>
</html>