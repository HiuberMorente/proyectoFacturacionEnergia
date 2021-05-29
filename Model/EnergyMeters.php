<?php


  class EnergyMeters
  {

    public static function getEnergyMeters(){
      $curl = curl_init();

      curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://apienergy.herokuapp.com/api/medidor',
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'GET',
      ));

      $response = curl_exec($curl);

      $result = json_decode($response, true);

      curl_close($curl);

      return $result;

    }

    public static function getEnergyMetersWhereId(){

    }
  }