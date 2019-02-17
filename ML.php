<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/keyPhrases');
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
$request->setBody(
  {"documents": [
    {
      "language": "en",
      "id": "1",
      "text": "Tax reform is an essential component of better economic climate in the future"
    },
    {
      "language": "en",
      "id": "2",
      "text": "Santa Clara County is trying to help housing. Stanford is hurting affordable housing"
    },
    {
      "language": "en",
      "id": "3",
      "text": "Engineering is becoming a negative aspect in terms of mental health"
    }
    ]}
);

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

?>
