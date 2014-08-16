<?php

namespace iRail\Api;

use iRail\Client;

/**
 * Class AbstractApi
 *
 * @package iRail\Api
 */
abstract class AbstractEndpoint extends \GuzzleHttp\Client
{

	/**
	 * @var Client
	 */
	private $client;

	/**
	 * @var array
	 */
	protected $options = array();

	/**
	 * @param Client $client
	 */
	public function __construct(Client $client)
    {
        $this->client = $client;

		$this->options = array(
			'query' => array(
				'lang'   => $this->client->getLocale(),
				'format' => $this->client->getFormat(),
			),
		);

		parent::__construct(array(
			'base_url' => $this->client->getUrl(),
		));
    }

	/**
	 * Do a GET request
	 *
	 * @param       $endpoint
	 * @param array $options
	 * @return mixed
	 */
	public function getResponse ($endpoint, array $options = array())
    {
		$options = array_merge_recursive($this->options, $options);

		$response = $this->get($endpoint, $options);

		return $response->json();
    }
}
