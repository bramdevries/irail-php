<?php

require_once '../vendor/autoload.php';

/**
 * Create a new instance of the iRail Client.
 *
 * You can pass an array with your prefered language like this
 *
 * new iRail(array('lang' => 'nl'));
 */
use iRail\Client as iRail;

$irail = new iRail();

/**
 * To get a list of all the stations:
 */
$stations = $irail->api('stations')->all();

/**
 * To get info about a connection:
 *
 * You can add a bunch off different parameters by passing an array as the 3rd parameter. The following parameters are allowed:
 *
 * date: dmy (day of month with leading 0, number of the month with leading 0, 10 or 11 (for 2010 or 2011))
 * time: Hours in 24 hour format concatenated with minutes with leading 0!
 * timeSel: Whether the date & time are for arrival or depart. Should be "arrive" or "depart"
 * typeOfTransport: Semicolon separated list of supported transportations. (eg: train;bus;taxi)
 */
$connection = $irail->api('connection')->schedule('Tienen', 'Courtrai');

/**
 * You can easily get a list of all trains leaving from a city by using the live board. The following example will return a list of all trains departing in Tienen on February 2, 2014 at 1PM.
 *
 * If you prefer working with id's, you can use the id() function. It works the same way, only with an id.
 */

$board = $irail->api('liveboard')->name('Tienen', array(
  'date' => '020214',
  'time' => '1300',
));

/**
 * You can get information about a vehicle, just pass the ID of the train. This will return all of it's stops.
 */
$vehicle = $irail->api('vehicle')->id('Be.NMBS.P1234');
