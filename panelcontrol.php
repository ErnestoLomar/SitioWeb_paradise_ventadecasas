<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['username'] == 'admin') {

} else {
   echo "Esta pagina es solo para usuarios registrados y/o administradores.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='crearcuenta.html'>Registrarme</a>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion ha terminado,
<a href='login.html'>Necesita Hacer Login</a>";
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="panelcontrol.css">
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
	<title>Panel De Control</title>
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
    <h2 class="titulo-pc">Panel De Control</h2>
    <div class="contenedor-padre">
        <div class="contenedor-hijo usuarios">
            <h2 class="titulo_caja">Consultar Todos Los Usuarios</h2>
            <form action="consulta1.php">
                <button class="btn">Mostrar</button>
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Consultar Un Usuario</h2>
            <form action="consulta2.php" method="post">
                <input class="input" type="text" placeholder="Ingrese la clave" name="clave"><br>
                <button class="btn">Mostrar</button>
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Editar Usuario</h2>
            <form action="editarusuario.php" method="post">
                <input class="input" type="text" placeholder="Ingrese La Clave Del Usuario" name="clave"><br>
                <button class="btn">Editar</button>
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Eliminar Usuario</h2>
            <form action="eliminarusuario.php" method="post">
                <input class="input" type="text" placeholder="Ingrese La Clave Del Usuario" name="clave"><br>
                <button class="btn">Eliminar</button>
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Dar De Alta Producto</h2>
            <form action="altaproducto.php" method="POST" enctype="multipart/form-data" class="form_registrar"> 
                <input type="text" class="input" name="nombre_producto" placeholder="Ingresa el nombre del producto"><br>
                <input type="text" class="input" name="desc_producto" placeholder="Ingresa la descripcion"><br>
                <input type="text" class="input" name="categoria" placeholder="Ingresa la categoria"><br>
                <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
                <input name="foto" type="file"/><br>
                <input type="submit" class="btn" name="submit" value="Subir" />
                <input type="reset" class="btn" name="clear" value="Borrar"/>
               
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Editar Producto</h2>
            <form action="editarproducto.php" method="post">
                <input class="input" type="text" placeholder="Ingrese La Clave Del Producto" name="clave"><br>
                <button class="btn">Editar</button>
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Eliminar Producto</h2>
            <form action="eliminarproducto.php" method="post">
                <input class="input" type="text" placeholder="Ingrese La Clave Del Producto" name="clave"><br>
                <button class="btn">Eliminar</button>
            </form>
        </div>
        <div class="contenedor-hijo">
            <h2 class="titulo_caja">Cerrar Sesion</h2>
            <form action="cerrarsesion.php" method="post">
                <button class="btn">Cerrar Sesion</button>
            </form>
        </div>
    </div>
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