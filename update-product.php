<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$options = [
	'json' => [
		"title" => "Iphone 14",
        "description" => "Apple's iPhone 14 measures in at 6.1 inches, while the larger-screened iPhone 14 Plus measures in at 6.7 inches, the same size as the iPhone 14 Pro Max. The iPhone 14 models feature an all-glass front and colorful glass back framed by a color-matched aerospace-grade aluminum frame.",
        "price" => "600",
        "brand" => "Apple",
        "category" => "SmartPhone"
	]
];
$response = $client->put('products/1', $options);
$code = $response->getStatusCode();
$body = $response->getBody();
var_dump(json_decode ($body));
?>