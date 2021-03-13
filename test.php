<?php

//API Url
$url = 'http://203.171.20.94:8012/api/AccessControl/GetUserInfor';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonDataEncoded = "{\"deviceId\":\"8a0fc66a61a959f6\", \"qrCodeId\": \"a652d57094b7590b0dea115b156c07098abdea87\", \"qrCodeValue\":\"P22498244182551944\"}";



//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);
?>
