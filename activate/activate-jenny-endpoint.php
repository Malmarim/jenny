<?php
require_once '../config.php';

$headers[] = 'accept: application/json';
$headers[] = 'Content-Type: application/json';

$payload = file_get_contents('activate-jenny-endpoint.json');
$payload = str_replace('###ENDPOINT###',$config['ENDPOINT'],$payload);
$payload = str_replace('###TOKEN###',$config['TOKEN'],$payload);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://studio-api.getjenny.com/actions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$stateResult = curl_exec ($ch);
curl_close($ch);

print_r($stateResult);

