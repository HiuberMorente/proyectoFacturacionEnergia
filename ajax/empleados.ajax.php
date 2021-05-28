<?php

require_once "../Controller/MunicipioController.php";
require_once "../Model/MuncipioModel.php";
require_once "../Controller/EmpleadosController.php";
require_once "../Model/EmpleadosModel.php";



class AjaxEmpleados{

    public function ajaxSelectMunicipio(){

       
        $id = $_POST["id"];
        $valor = null;

        $municipios = MunicipioController::controllerMostrarMunicipio($id, $valor);

        //var_dump($municipios);
        // var_dump($municipios[0]["municipio"]);
        
        // foreach($municipios as $key => $value){
        //     echo '<option value="'.$value["id"].'">'.$value["municipio"].'</option>';
        // }

        // $contador = 0;
        // while($municipios[$contador]["idDepartamento"] == $id){
        //     echo $municipios[$contador]["municipio"];
        //     $contador++;
        // }

        for($recorrido = 0; $recorrido <= count($municipios); $recorrido++){
            var_dump($municipios[$recorrido]["municipio"]);
        }

    }

    // ACTIVAR USUARIO
    public $activarEmpleado;
    public $activarId;

    public function ajaxActivarEmpleado(){

        $tabla = "empleado";

        $item1 = "estado";
        $valor1 = $this -> activarEmpleado;
        
        $item2 = "id";
        $valor2 = $this -> activarId;
        
        

        $respuesta = EmpleadosModel::modelActualizarEmpleado($tabla, $item1, $valor1, $item2, $valor2);
        
    }


}

if(isset($_POST["id"])){
    $select = new AjaxEmpleados();
    $select -> ajaxSelectMunicipio();
}

// ACTIVAR USUARIO
if(isset($_POST["activarEmpleado"])){

    $activarEmpleado = new AjaxEmpleados();
    $activarEmpleado -> activarEmpleado = $_POST['activarEmpleado'];
    $activarEmpleado -> activarId = $_POST['activarId'];
    $activarEmpleado -> ajaxActivarEmpleado();

}