<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$options = [
	'json' => [
		"firstName" => "Ollej",
    "lastName" => "Lemoj",
    "maidenName" => "Yap",
    "age" => "22",
    "email" => "Ollenji@gmail.com",
    "phone" => "09256774622",
    "bloodGroup" => "O-"
    
	]
];
$response = $client->post('users/add', $options);
$code = $response->getStatusCode();
$body = $response->getBody();

var_dump(json_decode ($body));
?>






