<?php
require_once '../config.php';

$getJennyApiEndpoint = "https://studio-api.getjenny.com/actions/###TOKEN###";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, str_replace('###TOKEN###',$config['TOKEN'],$getJennyApiEndpoint));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$stateResult = curl_exec ($ch);
curl_close($ch);

print_r($stateResult);


