<?php 

namespace iRail\Api;

/**
 *
 * Methods for Station endpoint
 */

class Station extends AbstractApi
{
  public function all() 
  {
    return $this->get('stations/');
  }
}