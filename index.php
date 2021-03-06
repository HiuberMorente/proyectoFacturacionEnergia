<?php

  require_once "vendor/autoload.php" ;

  require_once "Controller/LayoutController.php";
  require_once "Controller/UsuariosControllers.php";
  require_once "Controller/EmpleadosController.php";
  require_once "Controller/DepartamentoEmpleadosController.php";
  require_once "Controller/DepartamentoController.php";
  require_once "Controller/MunicipioController.php";


  require_once "Model/UsuariosModel.php";
  require_once "Model/EmpleadosModel.php";
  require_once "Model/DepartamentoEmpleadoModel.php";
  require_once "Model/DepartamentoModel.php";
  require_once "Model/MunicipioModel.php";
  require_once "Model/ClienteMedidorModel.php";
  require_once "Model/ClientModel.php";
  require_once "Model/EnergyMeters.php";


  $layout = new LayoutController();
  $layout->LayoutController();