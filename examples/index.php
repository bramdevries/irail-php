<?php 

require_once('../vendor/autoload.php');

use iRail\Client as iRail;

function dd($d) {
  echo "<pre>";
  print_r($d);
  die("</pre>");
}

$irail = new iRail();
$connection = $irail->api('connection')->schedule("Tienen", "Brugge", array(
  'date' => '241014',
  'timeSel' => 'arrive',
  'typeOfTransport' => 'bus',
));

dd($connection);
//dd($irail->api('stations')->all());