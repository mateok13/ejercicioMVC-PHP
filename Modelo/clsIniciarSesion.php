<?php
class clsIniciarSesion {
  private $conexion;

  public function __construct(){
    $this->conexion = new clsConexion();
    session_start();
  }

  public function validarUsuario($usuario, $clave) {
    $existe = false;
    $sql = "SELECT * FROM USUARIO WHERE USUARIO = '$usuario' AND CLAVE = '$clave' ";
    $consulta = $this->conexion->getConexion()->query($sql);
    while ($fila = $consulta->fetch_assoc()){
        $this->fijarSesion($fila);
        $existe = true;
    }
    return $existe;
  }

  public function fijarSesion($usuario) {
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['clave'] = $usuario['clave'];
    $_SESSION['rol'] = $usuario['rol'];
  }

  public function infoUsuario(){
    return $_SESSION['usuario'];
  }

  public function validarSesion(){
    return isset($_SESSION['usuario']);
  }

  public function infoSesion(){
    return $_SESSION;
  }

  public function cerrarSesion(){
    session_unset();
    session_destroy();
  }
}
