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
$password=$fila['password'];
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
<form name="resultados" method="post" action="editarusuario2.php" enctype="multipart/form-data">
<label for="" style="color: white; margin: 5px;">Clave:</label>
<input type="text" name="clave" maxlength="4" value=<?php echo $clave ?>>
<label for="" style="color: white; margin: 5px;">Nombre:</label>
<input type="text" name="nombre" maxlenght="20" value=<?php echo $nombre ?>>
<label for="" style="color: white; margin: 5px;">Correo:</label>
<input type="text" name="correo" maxlenght="100" size="50" value="<?php echo $correo ?>">
<label for="" style="color: white; margin: 5px;">Password:</label>
<input type="text" name="password" maxlenght="100" size="50" value="<?php echo $password ?>">
<label for="" style="color: white; margin: 5px;">Foto:</label>
<img src=<?php echo $imagen ?> width="100" height="100">
<br><br>
<input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
<input name="foto" type="file" /><br><br>
<button class="submit" type="submit">modificar registro</button><br><br>
<a href='panelcontrol.php' style='color: white;'>Panel De Control</a>
</form>
</div>

</body>
</html>