<?php


class DepartamentoEmpleadosController{

    static public function controllerMostrarDepartamentoEmpleado($item, $valor){

        $tabla = "deptoempleado";

        $respuesta = DepartamentoEmpleadoModel::modelMostrarDepartamentoEmpleado($tabla, $item, $valor);

        return $respuesta;
    }

   
    
}