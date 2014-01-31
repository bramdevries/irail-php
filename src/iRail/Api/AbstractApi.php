<?php

namespace iRail\Api;

use iRail\Client;

abstract class AbstractApi
{

  private $client;

  public function __construct(Client $client) 
  {
    $this->client = $client;
  }

  public function get ($path, array $parameters = array()) 
  {

    $path .= "?format=" . $this->client->getFormat();
    $path .= "&lang=" . $this->client->getLanguage();

    $request = $this->client->getHttpClient()->get($path);
    $response = $request->send();

    return Responder::getContent($response);
    
  }
}