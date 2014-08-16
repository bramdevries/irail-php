<?php

namespace iRail\Api;

use Guzzle\Http\Message\Response;

/**
 * Class Responder
 *
 * @package iRail\Api
 */
class Responder
{
	/**
	 * @param Response $response
	 * @return mixed
	 */
	public static function getContent(Response $response)
    {
        $body = $response->getBody(true);
        $content = json_decode($body, true);

        return $content;
    }
}
