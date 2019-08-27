<?php

$date = new DateTime();
$hoje = new DateTime();
echo $date->getTimestamp();

echo $date->format('Y-m-d H:i:s') . "\n";
//1hora
$date->sub(new DateInterval('PT1H'));
echo $date->getTimestamp();
$uma = $date->getTimestamp();
echo $date->format('Y-m-d H:i:s') . "\n";
//6horas
$date->sub(new DateInterval('PT5H'));
echo $date->getTimestamp();
$seis = $date->getTimestamp();
echo $date->format('Y-m-d H:i:s') . "\n";

//1 dias
$interval = new DateInterval('P1D');
$hoje->sub($interval);
$vintequatro = $hoje->getTimestamp();
echo $hoje->getTimestamp();
echo $hoje->format('Y-m-d H:i:s') . "\n";
//2 dias
$hoje->sub($interval);
$quarentaoito = $hoje->getTimestamp();
echo $hoje->getTimestamp();
echo $hoje->format('Y-m-d H:i:s') . "\n";

$hoje->sub($interval);
$setentadois = $hoje->getTimestamp();
echo $hoje->getTimestamp();
echo $hoje->format('Y-m-d H:i:s') . "\n";
echo $uma."\n";
echo $seis."\n";
echo $vintequatro."\n";
echo $quarentaoito."\n";
echo $setentadois."\n";