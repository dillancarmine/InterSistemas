<?php 
include "../../clases/auth.php";

$usuario = $_POST['usuario'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$Auth = new Auth();

// Validar si el usuario ya existe
if ($Auth->validarUsuarioExistente($usuario)) {
    echo "El usuario ya existe.";
} else {
    // Realizar el registro
    if ($Auth->registrar($usuario, $password)) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar.";
    }
}
?>
