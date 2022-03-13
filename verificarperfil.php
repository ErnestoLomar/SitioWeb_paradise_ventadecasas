<?php
session_start();

if ($_SESSION['loggedin'] == false) {
    header('Location: http://localhost/paradise/login.html');
} else if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['username'] != 'admin' ){
    header('Location: http://localhost/paradise/perfil.php');
}else if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['username'] == 'admin'){
    header('Location: http://localhost/paradise/panelcontrol.php');
    exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion ha terminado,
<a href='login.html'>Necesita Hacer Login</a>";
exit;
}
?>