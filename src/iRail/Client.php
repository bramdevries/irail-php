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
        'lang' 	 => 'en',
		'format' => 'json',
    );

	/**
	 * @var string
	 */
	protected $url = 'http://api.irail.be/';

	/**
	 * @param array  $options
	 * @param Guzzle $httpClient
	 */
	public function __construct (array $options = array(), Guzzle $httpClient = null)
    {
        $this->options = array_merge($this->options, $options);
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
	 * Get the format
	 *
	 * @return string|null
	 */
	public function getFormat()
    {
        return $this->options['format'];
    }

	/**
	 * Get the base url
	 *
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * Get the locale
	 *
	 * @return string|null
	 */
	public function getLocale()
    {
        return $this->options['lang'];
    }
}
