<?php 

namespace iRail;

use Guzzle\Http\Client as Guzzle;

class Client
{

  protected $options = array(
    'base_url' => 'http://api.irail.be/',
    'lang' => 'en',
    'format' => 'json'
  );

  private $httpClient;

  public function __construct (array $options = array(), Guzzle $httpClient = null) 
  {
     $this->options = array_merge($this->options, $options);
     
     $httpClient = $httpClient ?: new Guzzle($this->options['base_url']);
     $this->httpClient = $httpClient;
  }

  public function api($name) {
    switch ($name) {
      case 'stations':
        $api = new Api\Station($this);
        break;
    }

    return $api;
  }

  public function getHttpClient()
  {
    return $this->httpClient;
  }

  public function getFormat() {
    return $this->options['format'];
  }

  public function getLanguage() 
  {
    return $this->options['lang'];
  }
}