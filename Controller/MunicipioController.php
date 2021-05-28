<?php

  class MunicipioController
  {


    public static function controllerMostrarMunicipio($item, $valor)
    {

      $tabla = "municipio";

      return modelMostrarMunicipio($tabla, $item, $valor);

    }
  }