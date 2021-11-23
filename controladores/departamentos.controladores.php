<?php

/**
 * 
 */
class ControladorDepartamentos
{


    /**
     * TRAMEMOS LOS ESTILO DINÁMICOS DE LA PLANTILLA
     */

    static public function ctrMostrarDepartamentos()
    {

        $tabla = "departamentos";

        $respuesta = ModeloDepartamentos::mdlGetDepartamentos($tabla);

        return $respuesta;
    }
}
