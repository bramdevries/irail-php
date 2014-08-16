<?php

namespace iRail\Api;

/**
 * Class Liveboard
 *
 * @package iRail\Api
 */
class Liveboard extends AbstractEndpoint
{
	/**
	 * @param       $station
	 * @param array $options
	 * @return mixed
	 */
	public function name($station, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['station'] = $station;

		return $this->getResponse('liveboard/', array(
			'query' => $params
		));
    }

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

        return $this->getResponse('liveboard/', array(
			'query' => $params
		));
    }
}
