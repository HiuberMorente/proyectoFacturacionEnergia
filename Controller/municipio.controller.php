<?php

class ControllerMunicipio{


    static public function controllerMostrarMunicipio($item, $valor){
        $tabla = "municipio";

        $respuesta = ModelMunicipio::modelMostrarMunicipio($tabla, $item, $valor);

        return $respuesta;
    }
}