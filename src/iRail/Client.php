<?php

namespace iRail;

use Guzzle\Http\Client as Guzzle;

/**
 * Class Client
 *
 * @package iRail
 */
class Client
{

	/**
	 * @var array
	 */
	protected $options = array(
        'base_url' => 'http://api.irail.be/',
        'lang' => 'en',
    );

	/**
	 * @var Guzzle
	 */
	private $httpClient;

	/**
	 * @param array  $options
	 * @param Guzzle $httpClient
	 */
	public function __construct (array $options = array(), Guzzle $httpClient = null)
    {
        $this->options = array_merge($this->options, $options);

        $httpClient = $httpClient ?: new Guzzle($this->options['base_url']);
        $this->httpClient = $httpClient;
    }

	/**
	 * @param $name
	 * @throws \Exception
	 */
	public function api($name)
    {
		$instance = '\iRail\Api\\' . ucfirst($name);

		if (class_exists($instance)) {
			return new $instance($this);
		} else {
			throw new \Exception('Endpoint could not be found');
		}
    }

	/**
	 * @return Guzzle
	 */
	public function getHttpClient()
    {
        return $this->httpClient;
    }

	/**
	 * @return mixed
	 */
	public function getFormat()
    {
        return $this->options['format'];
    }

	/**
	 * @return mixed
	 */
	public function getLanguage()
    {
        return $this->options['lang'];
    }
}
