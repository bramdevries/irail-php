<?php

namespace iRail\Api;

class Liveboard extends AbstractApi
{
    public function name($station, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['station'] = $station;

        return $this->get('liveboard/', $params);
    }

    public function id($id, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['id'] = $id;

        return $this->get('liveboard/', $params);
    }
}
