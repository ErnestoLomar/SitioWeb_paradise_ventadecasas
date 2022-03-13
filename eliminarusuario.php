<?php
header('Content-Type: text/html; charset=utf-8');
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "paradise");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$clave = $_POST['clave'];
$result = mysqli_query($link, "SELECT * FROM usuarios WHERE id_usuario=$clave");
while ($fila = mysqli_fetch_array($result)){
    $nombre=$fila['nombre_usuario'];
    $correo=$fila['correo'];
    $imagen=$fila['imagen'];
}
//if (!$fila) {
//    printf("Error: %s\n", mysqli_error($con));
//    exit();
//}

mysqli_free_result($result);
mysqli_close($link);
?>

<html>
<body style="background-color: blue;">
<div id="f2">
<form name="resultados" method="post" action='eliminarusuario2.php'>
<label for="" style="color: white; margin: 5px;">Clave:</label>
<input type="text" name="clave" maxlength="4" value=<?php echo $clave ?>>
<label for="" style="color: white; margin: 5px;">Nombre:</label>
<input type="text" name="nombre" maxlenght="20" value=<?php echo $nombre ?>>
<label for="" style="color: white; margin: 5px;">Correo:</label>
<input type="text" name="desc" maxlenght="100" size="50" value="<?php echo $correo ?>">
<label for="" style="color: white; margin: 5px;">Foto:</label>
<img src=<?php echo $imagen ?> width="100" height="100"><br><br>
<button class="submit" type="submit">eliminar registro</button><br><br>
<a href='panelcontrol.php' style='color: white;'>Panel De Control</a>
</form>
</div>

</body>
</html>