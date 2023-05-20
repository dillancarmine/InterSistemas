<?php
session_start();
include "../../clases/auth.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$Auth = new Auth();

if ($Auth->logear($usuario, $password)) {
    header("location:../../inicio.php");
    exit();
} else {
    echo "No se pudo iniciar sesión.";
}
?>
