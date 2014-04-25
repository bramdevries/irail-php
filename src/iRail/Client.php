<?php

namespace iRail;

use Guzzle\Http\Client as Guzzle;

class Client
{

    protected $options = array(
        'base_url' => 'http://api.irail.be/',
        'lang' => 'en',
    );

    private $httpClient;

    public function __construct (array $options = array(), Guzzle $httpClient = null)
    {
        $this->options = array_merge($this->options, $options);

        $httpClient = $httpClient ?: new Guzzle($this->options['base_url']);
        $this->httpClient = $httpClient;
    }

    public function api($name)
    {
        switch ($name) {
            case 'stations':
                return new Api\Station($this);
                break;
            case 'connection':
                return new Api\Connection($this);
                break;
            case 'liveboard':
                return new Api\Liveboard($this);
                break;
            case 'vehicle':
                return new Api\Vehicle($this);
                break;
        }
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function getFormat()
    {
        return $this->options['format'];
    }

    public function getLanguage()
    {
        return $this->options['lang'];
    }
}
