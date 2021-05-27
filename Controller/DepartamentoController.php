<?php

class ControllerDepartamento{

    static public function controllerMostrarDepartamento($item, $valor){
        
        $tabla = "departamento";

        $respuesta = ModelDepartamento::modelMostrarDepartamento($tabla, $item, $valor);

        return $respuesta;
    }
}