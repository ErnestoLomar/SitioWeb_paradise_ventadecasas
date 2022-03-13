<?php
header('Content-Type: text/html; charset=utf-8');
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
    echo "<hr>";
    echo "<p style='color: white; text-align: center;'>Id: ".$resultados['id_usuario']."<br/><p/>";
echo "<p style='color: white; text-align: center;'>- Nombre: ".$resultados['nombre_usuario']."<br/><p/>";
echo "<p style='color: white; text-align: center;'>- Correo: ".$resultados['correo']."<br/><p/>";
}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "paradise");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM usuarios");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
if (!$fila) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

}
echo "<a href='panelcontrol.php' style='text-align: center; color: white; margin: auto;'>Regresar Al Panel</a>";
mysqli_free_result($result);
mysqli_close($link);

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