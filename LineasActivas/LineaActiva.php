<?php

// 1. Verifica si la linea está activa

$ch = curl_init();
$apiKey = "key_cur_prod_343e05f7ee3f45ed819183fad519ec53";
$number = "989462119";

$params = "api_key=$apiKey";
$params .= "&number=$number";

curl_setopt($ch, CURLOPT_URL,"http://t-cuida.tk/api/v1/telephone-lines/active");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    
// Recibe la respuesta del servidor
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Guarda la respuesta del servidor en una variable
$server_output = curl_exec($ch);

// Cierra la conexión cURL
curl_close ($ch);

//Imprimo la respuesta del servidor
print_r($server_output);

?>
