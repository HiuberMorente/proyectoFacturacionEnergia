<?php

require_once "conexion.php";

class UsuariosModel
{

    // MOSTRAR USUARIO
    public static function modelMostrarUsuario($tabla, $item, $valor){

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

    // INGRESAR USUARIOS
    static public function modelIngresarUsuario($tabla, $datos)
    {

        $statement = Conexion::Conectar()->prepare("INSERT INTO $tabla(nombre, usuario, `password`, perfil, foto) VALUES (:nombre, :usuario, :password, :perfil, :foto)");

        $statement->bindParam(':nombre', $datos["nombre"],PDO::PARAM_STR);
        $statement->bindParam(':usuario', $datos["usuario"], PDO::PARAM_STR);
        $statement->bindParam(':password', $datos["password"], PDO::PARAM_STR);
        $statement->bindParam(':perfil', $datos["perfil"], PDO::PARAM_STR);
        $statement->bindParam(':foto', $datos["foto"], PDO::PARAM_STR);

        if ($statement->execute()) {
            return "ok";
        } else {
            print_r($statement->errorInfo());
            return "error";
        }

        $statement->closeCursor();
        $statement = null;
    }

    // EDITAR USUARIOS
    static public function modelEditarUsuario($tabla, $datos){
        $statement = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, `password` = :password, perfil =:perfil, foto = :foto WHERE usuario = :usuario");

        $statement->bindParam(':nombre', $datos["nombre"], PDO::PARAM_STR);
        $statement->bindParam(':password', $datos["password"], PDO::PARAM_STR);
        $statement->bindParam(':perfil', $datos["perfil"], PDO::PARAM_STR);
        $statement->bindParam(':foto', $datos["foto"], PDO::PARAM_STR);
        $statement->bindParam(':usuario', $datos["usuario"], PDO::PARAM_STR);

        if ($statement->execute()) {
            return "ok";
        } else {
            print_r($statement->errorInfo());
            return "error";
        }

        $statement->closeCursor();
        $statement = null;
    }

    // ACTUALIZAR USUARIO
    static public function modelActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

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

     // BORRAR USUARIO
     static public function modelBorrarUsuario($tabla, $datos){
        $statement = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        
        $statement -> bindParam(":id", $datos, PDO::PARAM_INT);

        if($statement -> execute()){
            return "ok";
        }else {
            return "error";
        }

        $statement -> closeCursor();
        $statement = null;
    }
    
}
