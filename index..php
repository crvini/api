<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/departamentos.controladores.php";


require_once "modelos/departamentos.plantilla.php";

$plantilla = new ControladorPlantilla();
$plantilla->plantilla();
