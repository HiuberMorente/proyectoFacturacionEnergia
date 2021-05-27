<?php

require_once "conexion.php";

class ModelEmpleados{

    static public function modelMostrarEmpleado($tabla, $item, $valor){
        if ($item != null) {

            $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $statement->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $statement->execute();

            return $statement->fetch();

            $statement->closeCursor();

            $statement = null;
        } else {

            $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $statement->execute();

            return $statement->fetchAll();

            $statement->closeCursor();

            $statement = null;
        }
    }


    static public function modelIngresarEmpleado($tabla, $datos){

        $statement = Conexion::Conectar()->prepare("INSERT INTO $tabla(dpi, nombre, apellido, idDepartamentoEmpleado, telefono, email, direccionDomiciliar, idDepartamento, idMunicipio) VALUES (:dpi, :nombre, :apellido, :idDepartamentoEmpleado, :telefono, :email, :direccionDomiciliar, :idDepartamento, :idMunicipio)");

        $statement -> bindParam(':dpi', $datos["dpi"], PDO::PARAM_STR);
        $statement -> bindParam(':nombre', $datos["nombre"], PDO::PARAM_STR);
        $statement -> bindParam(':apellido', $datos["apellido"], PDO::PARAM_STR);
        $statement -> bindParam(':idDepartamentoEmpleado', $datos["departamentoEmpleado"], PDO::PARAM_INT);
        $statement -> bindParam(':telefono', $datos["telefono"], PDO::PARAM_STR);
        $statement -> bindParam(':email', $datos["email"], PDO::PARAM_STR);
        $statement -> bindParam(':direccionDomiciliar',$datos["direccionDomiciliar"], PDO::PARAM_STR);
        $statement -> bindParam(':idDepartamento', $datos["departamento"], PDO::PARAM_INT);
        $statement -> bindParam(':idMunicipio', $datos["municipio"], PDO::PARAM_INT);

        if($statement -> execute()){
            return "ok";
        }else{
            print_r($statement->errorInfo());
            return "error";
        }

        $statement->closeCursor();
        $statement = null;
    }


    // ACTUALIZAR USUARIO
    static public function modelActualizarEmpleado($tabla, $item1, $valor1, $item2, $valor2){

        $statement = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

        $statement->bindParam(':' . $item1, $valor1, PDO::PARAM_STR);

        $statement->bindParam(':' . $item2, $valor2, PDO::PARAM_STR);

        if ($statement->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $statement->closeCursor();
        $statement = null;
    }
    
}