<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require __DIR__ . '/vendor/autoload.php';



$request = new HTTP_Request2('https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/keyPhrases');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Content-Type' => 'application/json',
    'Ocp-Apim-Subscription-Key' => '3a8a0b0b4b894c2fa3d97fd01ffeff05',
);

$request->setHeader($headers);

$parameters = array(

);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody(//sample user searches in the last week
  '{"documents": [
    {
      "language": "en",
      "id": "1",
      "text": $
    }
    ]}'
);

try
{
    $response = $request->send();
    $result = $response->getBody();
    //this is the data for some reason I cant parse it right now so for the demo this will just be the data manually inputted
    $temp = array("essential component of better economic climate","Tax reform","future","affordable housing","Santa Clara County","Stanford", "negative aspect","terms of mental health","Engineering");


    //$a = json_decode($response, true);
}
catch (HttpException $ex)
{
    echo $ex;
}

?>
