# iRail-php

A Composer compatible PHP wrapper for [iRail.be](https://hello.irail.be/about/)

## Usage

Using this can literaly not be easier. Just require it using composer:

`composer require bramdevries/irail-php`

Then create an instance

	use iRail\Client as iRail;

	$irail = new iRail();
	
If you want a list of all the belgian railway stations:

	$stations = $irail->api('stations')->all();

To get info about a connection between two stations:
	
	$connection = $irail->api('connection')->schedule('Tienen', 'Courtrai');

For other usage you can check the example file included.


