<?php
$selec = $_POST['filtro'];
echo "$selec";
if($selec == 'todo'){
    header('Location: http://localhost/paradise/productos.php');
}else if($selec == 'unpiso'){
    header('Location: http://localhost/paradise/unpiso.php');
}else if($selec == 'dospisos'){
    header('Location: http://localhost/paradise/dospisos.php');
}else if($selec == 'trespisos'){
    header('Location: http://localhost/paradise/trespisos.php');
}
?>