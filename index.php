<?php

require_once "Controller/layout.controller.php";
require_once "Controller/usuarios.controller.php";
require_once "Controller/empleados.controller.php";
require_once "Controller/departamentoEmpleado.controller.php";
require_once "Controller/DepartamentoController.php";
require_once "Controller/municipio.controller.php";


require_once "Model/usuarios.model.php";
require_once "Model/empleados.model.php";
require_once "Model/departamentoEmpleado.model.php";
require_once "Model/departamento.model.php";
require_once "Model/municipio.model.php";
require_once "Model/getMunicipio.php";



$layout = new ControllerLayout();
$layout -> controllerLayout();