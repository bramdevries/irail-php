<?php

namespace iRail\Api;

/**
 * Class Vehicle
 *
 * @package iRail\Api
 */
class Vehicle extends AbstractApi
{
	/**
	 * @param       $id
	 * @param array $options
	 * @return mixed
	 */
	public function id($id, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['id'] = $id;

        return $this->get('vehicle/', $params);
    }
}
