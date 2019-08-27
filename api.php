<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


//$server_output = file_get_contents('https://web.smartgps.com.br/api/get_devices_latest?user_api_hash=$2y$10$yqP4ZJ06VieeWGPiEhNx5.tELC7lRfkv8bYLLjdmhdsfvQFg9OlWu&time=1566671418');
$server_output = file_get_contents('https://web.smartgps.com.br/api/get_devices_latest?user_api_hash=$2y$10$yqP4ZJ06VieeWGPiEhNx5.tELC7lRfkv8bYLLjdmhdsfvQFg9OlWu');

$items = json_decode($server_output, true);

//file_put_contents('itens.txt', $server_output);
//print_r($items);
print_r(count($items['items']));
$carros = array();
foreach ($items['items'] as $carro) {
	$carros[$carro['id']] = $carro;
	echo $carro['timestamp'];
}
echo "=====\n";
print_r(count($carros));

