<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('Location: http://localhost/paradise/index.html');
} else {
    header('Location: http://localhost/paradise/login.html');
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
exit;
}
?>