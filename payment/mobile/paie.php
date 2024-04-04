<?php
require 'sky/dashboard.php';
$headers = array(
  'Content-Type' => 'application/json',
  'Accept' => '*/*',
  'X-Country' => 'RDC',
  'X-Currency' => 'RDC',
  'Authorization' => 'Bearer UC*****2w',
  'x-signature' => 'MGsp*********Ag==',
  'x-key' => 'DVZC***********NM='
);
$client = new GuzzleHttpClient();

// Define array of request body.
$request_body = array(
  "subscriber" => array(
    "msisdn" => "70***14"
  ),
  "transaction" => array(
    "amount" => "100",
    "id" => "12***260"
  ),
  "additional_info" => array(
    array(
      "key" => "remark",
      "value" => "AIRTXXXXXX"
    )
  ),
  "reference" => "10***2",
  "pin" => "KYJE***+o8="
);

try {
  $response = $client->request('POST', 'https://openapiuat.airtel.africa/standard/v2/cashin/', array(
    'headers' => $headers,
    'json' => $request_body
    )
  );
 print_r($response->getBody()->getContents());
}
catch (GuzzleHttpExceptionBadResponseException $e) {
// handle exception or api errors.
  print_r($e->getMessage());
}
?>
