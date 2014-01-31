<?php 

require_once('../vendor/autoload.php');

use iRail\Client as iRail;

function dd() {
  echo "<pre>";
  print_r(func_get_args());
  die("</pre>");
}

$irail = new iRail();
$station = $irail->api('stations')->all();


dd($station);