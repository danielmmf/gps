<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);



 $ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://web.smartgps.com.br/api/login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "email=api@smartgps.com.br&password=123456");

// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

print_r($server_output);