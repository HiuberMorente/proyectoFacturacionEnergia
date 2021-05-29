<?php

//require_once "conexion.php";

  class MunicipioModel
  {

    public static function modelMostrarMunicipio($tabla, $item, $valor)
    {

      $url = "http://apienergy.herokuapp.com/api/";

       if ($item !== null) {

        $busqueda = $url . $tabla . "/" . $item;
        $json = file_get_contents($busqueda);
        $datosMunicipio = json_decode($json, true);
        return $datosMunicipio;



      }else {

        $busqueda = $url . $tabla;
        $json = file_get_contents($busqueda);
        $datosMunicipio = json_decode($json, true);
        return $datosMunicipio;

      }
    }


    public static function  municipioWhereId($item){

      if ($item !== null) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
           CURLOPT_URL => 'https://apienergy.herokuapp.com/api/municipio',
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => '',
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_POSTFIELDS => 'id='.$item.'',
           CURLOPT_HTTPHEADER => array(
              'Content-Type: application/x-www-form-urlencoded'
           ),
        ));

        $response = curl_exec($curl);

        $muncipios = json_decode($response, true);
        curl_close($curl);

        return $muncipios;


      }
    }

  }