<?php

namespace iRail\Api;

/**
 * Class Station
 *
 * @package iRail\Api
 */
class Station extends AbstractApi
{
	/**
	 * @return mixed
	 */
	public function all()
    {
        return $this->get('stations/');
    }
}
