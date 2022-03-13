<?php
header('Content-Type: text/html; charset=utf-8');
function mostrarDatos ($resultados) {
  if ($resultados !=NULL) {
      echo "<hr>";
      echo "<p style='color: aliceblue;'>Id: ".$resultados['id_usuario']."<br/><p/>";
      echo "<p style='color: aliceblue;'>- Nombre: ".$resultados['nombre_usuario']."<br/><p/>";
      echo "<p style='color: aliceblue;'>- Correo: ".$resultados['correo']."<br/><p/>";
  }else{
      echo "<br/>No hay más datos!!! <br/>";
    }
}
$link = mysqli_connect("localhost", "id16990318_root", ">uK!Dr5b1w0}A_32");
mysqli_select_db($link, "id16990318_ppets");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM usuarios");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
if (!$fila) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

}
echo '<a href="panelc.html">Regresar Al Panel</a>';
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
<body style="background-color: black;">
    
</body>
</html>