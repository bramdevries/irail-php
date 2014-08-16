<?php

namespace iRail\Api;

/**
 * Class Connection
 *
 * @package iRail\Api
 */
class Connection extends AbstractApi
{

	/**
	 * @param       $from
	 * @param       $to
	 * @param array $options
	 * @return mixed
	 */
	public function schedule($from, $to, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['from'] = $from;
        $params['to'] = $to;

        return $this->get('connections/', $params);
    }
}
