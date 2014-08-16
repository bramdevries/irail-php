<?php

namespace iRail\Api;

use iRail\Client;

/**
 * Class AbstractApi
 *
 * @package iRail\Api
 */
abstract class AbstractApi
{

	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @param Client $client
	 */
	public function __construct(Client $client)
    {
        $this->client = $client;
    }

	/**
	 * @param       $path
	 * @param array $parameters
	 * @return mixed
	 */
	public function get ($path, array $parameters = array())
    {

        $path .= "?format=json";
        $path .= "&lang=" . $this->client->getLanguage();

        foreach ($parameters as $key => $param) {
            $path .= "&" . $key . '=' . $param;
        }

        $request = $this->client->getHttpClient()->get($path);
        $response = $request->send();

        return Responder::getContent($response);
    }
}
