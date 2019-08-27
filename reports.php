<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$date = new DateTime();
$hoje = new DateTime();

$date->sub(new DateInterval('PT1H'));

$uma = $date->getTimestamp();

//6horas
$date->sub(new DateInterval('PT5H'));
$seis = $date->getTimestamp();

//1 dias
$interval = new DateInterval('P1D');

$hoje->sub($interval);
$vintequatro = $hoje->getTimestamp();

//2 dias
$hoje->sub($interval);
$quarentaoito = $hoje->getTimestamp();


$hoje->sub($interval);
$setentadois = $hoje->getTimestamp();

$server_output = file_get_contents('https://web.smartgps.com.br/api/get_devices_latest?user_api_hash=$2y$10$yqP4ZJ06VieeWGPiEhNx5.tELC7lRfkv8bYLLjdmhdsfvQFg9OlWu&time=1566671418');
//$server_output = file_get_contents('https://web.smartgps.com.br/api/get_devices_latest?user_api_hash=$2y$10$yqP4ZJ06VieeWGPiEhNx5.tELC7lRfkv8bYLLjdmhdsfvQFg9OlWu');

$items = json_decode($server_output, true);

//file_put_contents('itens.txt', $server_output);
//print_r($items);
print_r(count($items['items']));
$carros = array();
foreach ($items['items'] as $carro) {
	$carros[$carro['id']] = $carro;
	if($carro['timestamp'] > $uma){
		$carros[1][] = $carro;
	}else if($carro['timestamp'] > $seis && $carro['timestamp'] < $vintequatro){
		$carros[6][] = $carro;
	}else if($carro['timestamp'] > $vintequatro && $carro['timestamp'] < $quarentaoito){
		$carros[24][] = $carro;
	}else if($carro['timestamp'] > $quarentaoito && $carro['timestamp'] < $setentadois){
		$carros[48][] = $carro;
	}else{
		$carros[78][] = $carro;
	}
	//echo $carro['timestamp'];
}
echo "Total =====\n";
print_r(count($carros));
echo "=====\n";
print_r(count($carros[1]));
echo "=====\n";
print_r(count($carros[6]));
echo "=====\n";
print_r(count($carros[24]));
echo "=====\n";
print_r(count($carros[48]));
echo "=====\n";
print_r(count($carros[78]));
//print_r($carros);