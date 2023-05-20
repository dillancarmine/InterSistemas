<?php 
include "conexion.php";

class Auth {
    private $conexion;

    public function __construct() {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function registrar($usuario, $password) {
        $sql = "INSERT INTO usuarios (usuario, password) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('ss', $usuario, $password);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function validarUsuarioExistente($usuario) {
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function logear($usuario, $password) {
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $passwordExistente = $row['password'];

            if (password_verify($password, $passwordExistente)) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }   
}
?>
