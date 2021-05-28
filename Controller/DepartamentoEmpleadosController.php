<?php


class DepartamentoEmpleadosController{

    public static function controllerMostrarDepartamentoEmpleado($item, $valor){

        $tabla = "deptoempleado";

        return DepartamentoEmpleadoModel::modelMostrarDepartamentoEmpleado($tabla, $item, $valor);

    }
    
}