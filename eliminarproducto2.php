<?php
header('Content-Type: text/html; charset=utf-8');
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "paradise");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$clave = $_POST['clave'];
$result = mysqli_query($link, "DELETE from productos WHERE id_producto=$clave");
echo "<h1 style='color: white;'>registro eliminado<h1/>";
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
<a href='panelcontrol.php' style='color: white; font-size: 18px;'>Panel De Control</a>
</body>
</html>