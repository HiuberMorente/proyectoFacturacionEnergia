<?php


class ControllerDepartamentoEmpleado{

    static public function controllerMostrarDepartamentoEmpleado($item, $valor){

        $tabla = "departamentoempleado";

        $respuesta = ModelDepartamentoEmpleados::modelMostrarDepartamentoEmpleado($tabla, $item, $valor);

        return $respuesta;
    }

   
    
}