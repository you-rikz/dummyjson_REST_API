<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$options = [
	'json' => [
		"title" => "BffFries",
    "description" => "McDonald's World Famous Fries® are made with premium potatoes such as the Russet Burbank and the Shepody. With 0g of trans fat per labeled serving, these epic fries are crispy and golden on the outside and fluffy on the inside.",
    "price" => "135 pesos",
    "brand" => "MCDO",
    "category" => "Food"
    
	]
];
$response = $client->post('products/add', $options);
$code = $response->getStatusCode();
$body = $response->getBody();

var_dump(json_decode ($body));
?>






