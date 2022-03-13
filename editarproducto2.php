<?php
header('Content-Type: text/html; charset=utf-8');
$host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "paradise";
 $tbl_name = "productos";
 
 $clave = $_POST['clave'];
 $usuario = $_POST['nombre'];
 $categoria = $_POST['categoria'];
 $descripcion = $_POST['descripcion'];
 
$carpeta = 'productos/';
opendir($carpeta);
$destino=$carpeta.$_FILES['foto']['name'];
copy ($_FILES['foto']['tmp_name'],$destino);
$imag1=$_FILES['foto']['name'];
$imagen=$carpeta . $imag1;
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $query = mysqli_query($conexion, "UPDATE $tbl_name SET nombre_producto='$usuario', descripcion='$descripcion', imagen='$imagen', categoria='$categoria' WHERE id_producto='$clave'");



 
 echo "<br />" . "<h2 style='color: white;'>" . "Producto Modificado!" . "</h2>";
 echo "<h5>" . "<a href='panelcontrol.php' style='color: white;'>Panel De Control</a>" . "</h5>"; 

 
 mysqli_close($conexion)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: blue;">
    
</body>
</html>