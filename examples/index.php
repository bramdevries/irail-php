<?php 

require_once('../vendor/autoload.php');

use iRail\Client as iRail;

function dd($d) {
  echo "<pre>";
  print_r($d);
  die("</pre>");
}

$irail = new iRail();
/*$connection = $irail->api('connection')->schedule("Tienen", "Brugge", array(
  'date' => '241014',
  'timeSel' => 'arrive',
  'typeOfTransport' => 'bus',
));*/

//$board  = $irail->api('liveboard')->name('Gent Sint Pieters');
/*$board = $irail->api('liveboard')->name('Courtrai', array(
  'date' => '020214',
  'time' => '1300',
  'fast' => true
)); */


$vehicle = $irail->api('vehicle')->id('Be.NMBS.P1234');

dd($vehicle);