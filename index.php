<?php
require('Modelo/clsConexion.php');
require('Modelo/clsIniciarSesion.php');

$sesion = new clsIniciarSesion();
require ('Controlador/gestionProducto.php');