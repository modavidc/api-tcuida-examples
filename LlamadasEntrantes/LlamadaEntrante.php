<?php

// 2. Verifica y guarda la llamada entrante

$ch = curl_init();

$apiKey = "key_cur_prod_343e05f7ee3f45ed819183fad519ec53";
$call_id = "1131";
$number = "989462119";
$annexed = "6401";
$date_init = "20-12-2019 13:47:00";

$params = "api_key=$apiKey";
$params .= "&call_id=$call_id";
$params .= "&number=$number";
$params .= "&annexed=$annexed";
$params .= "&date_init=$date_init";

curl_setopt($ch, CURLOPT_URL,"http://t-cuida.tk/api/v1/calls/incoming");
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
