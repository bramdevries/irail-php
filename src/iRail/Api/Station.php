<?php 

namespace iRail\Api;

class Station extends AbstractApi
{
  public function all() 
  {
    return $this->get('stations/');
  }
}