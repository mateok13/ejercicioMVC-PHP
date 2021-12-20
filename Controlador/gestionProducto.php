<?php

if ($sesion->validarSesion()) {
    if (isset($_REQUEST['cerrar'])) {
        $sesion->cerrarSesion();
        require('Vista/inicioSesion.php');
    }else if (isset($_REQUEST['info'])) {
        $mostrarDatos = $sesion->infoSesion();
        require('Vista/infoSesion.php');
    }else {
        require('Modelo/clsProductoAcceso.php');
        $datos = new clsProductoAcceso();
        $listaProductos = $datos->listar();
        require('Vista/paginaProductos.php');
    }
}else if( isset($_REQUEST['usuario']) && isset($_REQUEST['clave']) ) {
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];
    if ($sesion->validarUsuario($usuario, $clave)) {
        require('Controlador/gestionProducto.php');
    }else {
        echo "<p>Datos invalidos, Intente de nuevo</p>";
        require('Vista/inicioSesion.php');
    } 
}else {
        require('Vista/inicioSesion.php');
}