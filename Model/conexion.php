<?php

class Conexion
{
  static public function conectar()
  {
//    $link = new PDO(
//       "mysql:host=b0eaalk0on9nwtd1xpej-mysql.services.clever-cloud.com;dbname=b0eaalk0on9nwtd1xpej",
//       "uhmvmm8amhftg0wt",
//       "m06E0pvmoiDi0P3Wnerv"
//    );

    $link = new PDO(
       "mysql:host=localhost;dbname=sisfacturacionenergia",
       "root",
       ""
    );

    $link->exec("set names utf8");

    return $link;
  }
}
