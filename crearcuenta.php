<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "paradise";
 $tbl_name = "usuarios";
 
 $usuario = $_POST['nombre'];
 $mail = $_POST['correo'];
 $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
 
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

 $query = "INSERT INTO usuarios (nombre_usuario, correo, password,imagen) VALUES ('$usuario', '$mail','$hash','$imagen')";

 if (!mysqli_query($conexion, $query))
 {
 die('Error: ' . mysqli_error());
 echo "Error al crear el usuario." . "<br />";
 }

 else {
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $usuario . "</h4>" . "\n\n";
 echo "<h5>" . "Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
   }
 
 mysqli_close($conexion)
?>