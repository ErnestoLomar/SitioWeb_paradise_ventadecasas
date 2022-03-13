<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="productos.css">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ef259853b6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="icono.jpg">
    <title>Servicios</title>
</head>
<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <div class="fondo">
        <nav>
            <ul class="nav__ul">
                <li class="nav__ul-li"><i class="fab fa-product-hunt"></i><a href="index.html">Inicio</a></li>
                <li class="nav__ul-li-inicio"><i class="fas fa-home"></i><a href="productos.html">Servicios</a></li>
                <li class="nav__ul-li"><i class="fab fa-weixin"></i><a href="sobrenosotros.html">Sobre Nosotros</a></li>
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
    <div class="contenedor__slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="slider1.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="slider2.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="slider3.jpg" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="slider4.jpg" alt="" class="slider__img">
            </div>
        </div>
    </div>
    <h2 class="titulo-casas">CASAS EN VENTA</h2>
    <div class="contenedorfiltro">
        <form action="filtro.php" method="POST" class="filtro">
            <label>Escoge tu casa ideal:</label>
            <select name="filtro" id="filtro">
                <option value="todo">Todo</option>
                <option value="unpiso">1 Piso</option>
                <option value="dospisos">2 Pisos</option>
                <option value="trespisos">3 Pisos</option>
            </select>
            <input type="submit" value="Solicitar" class="btn-solicitar">
        </form>
    </div>
    <div class="line"></div>
    <div class="contenedor-productos">
        <?php
                header('Content-Type: text/html; charset=utf-8');
                    function mostrarDatos ($resultados) {
                        if ($resultados !=NULL) {
                            echo "
                            <div class='producto'>
                                <img src=".$resultados['imagen'].">
                                <h2 class='titulo-producto'>".$resultados['nombre_producto']."</h2>
                                <p>".$resultados['descripcion']."</p>
                                <button class='btn-masinfo' onclick='mostrarInfo()'>Más informacón</button>
                                <button class='btn-contactar'><a href='mailto:marioernestoficial@gmail.com'>Contactar Agente</a></button>
                            </div>
                            ";
                            
                        }
                        else {echo "<br/>No hay más datos!!! <br/>";}
                        }
                        $link = mysqli_connect("localhost", "root", "");
                        mysqli_select_db($link, "paradise");
                        $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
                        $result = mysqli_query($link, "SELECT * FROM productos WHERE categoria='trespisos'");
                        while ($fila = mysqli_fetch_array($result)){
                        mostrarDatos($fila);
                        if (!$fila) {
                            printf("Error: %s\n", mysqli_error($con));
                            exit();
                        }
                        
                        }
                        mysqli_free_result($result);
                        mysqli_close($link);
            ?>
    </div>
    <div class="contenedorformularios">
        <div class="cajaform">
            <form action="verificarlogin.php">
                <h2 class="tituloform">Comprar Casa</h2>
                <input type="text" id="nombrec" placeholder="Ingrese Su Nombre"><br>
                <input type="text" placeholder="Ingrese Su Correo"><br>
                <input type="text" placeholder="Ingrese Su RFC"><br>
                <input type="text" placeholder="Ingrese Su Dirección"><br>
                <input type="text" placeholder="Ingrese Que Tipo De Casa Desea"><br>
                <button id="btn-compra">Enviar</button>
            </form>
        </div>
        <div class="cajaform">
            <form action="verificarlogin.php">
                <h2 class="tituloform">Reservar Una Cita</h2>
                <input type="text" id="nombrer" placeholder="Ingrese Su Nombre"><br>
                <input type="text" placeholder="Ingrese Su Numero"><br>
                <button id="btn-reserva">Enviar</button>
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
    <script src="slider.js"></script>
    <script src="productos.js"></script>
</body>
</html>