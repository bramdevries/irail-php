<?php

namespace iRail\Api;

use Guzzle\Http\Message\Response;

class Responder
{
    public static function getContent(Response $response)
    {
        $body = $response->getBody(true);
        $content = json_decode($body, true);

        return $content;
    }
}
