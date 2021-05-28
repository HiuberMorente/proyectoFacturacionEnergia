<?php

//require_once "conexion.php";

class MuncipioModel{

    public static function modelMostrarMunicipio($tabla, $item, $valor){

        $url = "http://apienergy.herokuapp.com/api/";


        if ($item != null && $valor != null) {

            $busqueda = $url.$tabla."/".$item;
            $json = file_get_contents($busqueda);
            $datosMunicipio = json_decode($json, true);
            return $datosMunicipio;  

            // $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            // $statement->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            // $statement->execute();

            // return $statement->fetch();

            // $statement->closeCursor();

            // $statement = null;


        }else if($item != null){

            $busqueda = $url.$tabla;
            $json = file_get_contents($busqueda);
            $datosMunicipio = json_decode($json, true);
            return $datosMunicipio;
            
            


            // $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idDepartamento = $item");      

            // $statement->execute();
    
            // return $statement->fetchAll();
    
            // $statement->closeCursor();
    
            // $statement = null;

        }else {

            $busqueda = $url.$tabla;
            $json = file_get_contents($busqueda);
            $datosMunicipio = json_decode($json, true);
            return $datosMunicipio;
            // $statement = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            // $statement->execute();

            // return $statement->fetchAll();

            // $statement->closeCursor();

            // $statement = null;
        }
    }
  
}