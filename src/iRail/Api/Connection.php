<?php

namespace iRail\Api;

class Connection extends AbstractApi
{

    public function schedule($from, $to, array $options = array())
    {
        $params = array();
        $params = array_merge($params, $options);

        $params['from'] = $from;
        $params['to'] = $to;

        return $this->get('connections/', $params);
    }
}
