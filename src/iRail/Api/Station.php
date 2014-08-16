<?php

namespace iRail\Api;

/**
 * Class Station
 *
 * @package iRail\Api
 */
class Station extends AbstractEndpoint
{
	/**
	 * @return mixed
	 */
	public function all()
    {
        return $this->getResponse('stations/');
    }
}
