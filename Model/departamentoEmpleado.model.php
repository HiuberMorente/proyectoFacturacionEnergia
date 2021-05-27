<?php

require_once "conexion.php";


class  ModelDepartamentoEmpleados{

    static public function modelMostrarDepartamentoEmpleado($tabla, $item, $valor){
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
}

