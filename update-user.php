<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$options = [
	'json' => [
		"firstName" => "Keyn",
    "lastName" => "Nine",
    "maidenName" => "Fur",
    "age" => "22",
    "email" => "kanekicles@gmail.com",
    "phone" => "09253436782",
    "bloodGroup" => "A-"
	]
];
$response = $client->put('users/3', $options);
$code = $response->getStatusCode();
$body = $response->getBody();
var_dump(json_decode ($body));
?>