<?php
header('Content-Type: text/html; charset=utf-8');
$host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "paradise";
 $tbl_name = "usuarios";
 
 $clave = $_POST['clave'];
 $usuario = $_POST['nombre'];
 $mail = $_POST['correo'];
 $hash = $_POST['password'];
 
$carpeta = 'usuarios/';
opendir($carpeta);
$destino=$carpeta.$_FILES['foto']['name'];
copy ($_FILES['foto']['tmp_name'],$destino);
$imag1=$_FILES['foto']['name'];
$imagen=$carpeta . $imag1;

 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $query = mysqli_query($conexion, "UPDATE usuarios SET nombre_usuario='$usuario', correo='$mail', password='$hash', imagen='$imagen' WHERE id_usuario='$clave'");



 
 echo "<br />" . "<h2 style='color: white;'>" . "Usuario Modificado!" . "</h2>";
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