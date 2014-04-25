<?php

namespace iRail\Api;

class Vehicle extends AbstractApi
{
    public function id($id, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['id'] = $id;

        return $this->get('vehicle/', $params);
    }
}
