<?php


  class TypeEnergyMetersModel
  {
    public static function getTypeEnergyMeters(){
      $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://apienergy.herokuapp.com/api/tipomedidor',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS => 'dpi=501125780207&nombre=pedro&apellido=ramirez&idDepartamentoEmpleado=1&telefono=58547743&email=pedri%40gmail.com&direccionDomiciliar=zona%202&idDepartamento=2&idMunicipio=22&idRuta=0&estado=1&fecha=1999-12-17',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
return $response;


    }

  }