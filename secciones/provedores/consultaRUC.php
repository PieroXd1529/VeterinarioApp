<?php
// Datos
$token = 'apis-token-4058.LlIUIqoxAr3sZBnYsE7g5h-EOigvg8nj';
$dni = $_REQUEST['dni'];

// Iniciar llamada a API
$curl = curl_init();

// Buscar dni
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.apis.net.pe/v1/ruc?numero=' . $dni,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Referer: https://apis.net.pe/consulta-ruc-api',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);
echo $response;


// curl_close($curl);
// // Datos listos para usar
// $persona = json_decode($response);
// var_dump($persona);
?>