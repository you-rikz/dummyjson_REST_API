<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);
$response = $client->delete('users/5');
$code = $response->getStatusCode();
$body = $response->getBody();

var_dump(json_decode ($body));
?>