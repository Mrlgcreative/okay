<?php>
require 'vendor/autoload.php';
$headers = array(
   'Content-Type' => 'application/json', 
   'Accept' => '*/*', 
);

$client = new GuzzleHttpClient();

request_body = fech();

try {
  $response = $client->request('POST', 'https://openapiuat.airtel.africa/auth/oauth2/token', array(
    'headers' => $headers,
    'json' => $request_body
    )
  );
 print_r($response->getBody()->getContents());
}
catch (GuzzleHttpExceptionBadResponseException $e) {
  print_r($e->getMessage());
}