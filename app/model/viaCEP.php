<?php

namespace App\model;

class viaCEP
{
  /**
   * @param string  $cep
   * @return array
   */

  public static function searchCEP($cep)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "viacep.com.br/ws/$cep/json/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $arrayAddress = json_decode($response, TRUE);

    return  isset($arrayAddress['cep']) ? $arrayAddress : NULL;
  }
}
