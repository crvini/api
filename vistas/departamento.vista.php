<?php

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $mostarDepartamentos = ControladorDepartamentos::ctrMostrarDepartamentos();

    echo json_encode($mostarDepartamentos);
}
