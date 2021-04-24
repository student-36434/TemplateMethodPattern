<?php

require_once __DIR__ . '/Classes/BeachJourney.php';
require_once __DIR__ . '/Classes/CityJourney.php';

use Classes\BeachJourney;
use Classes\CityJourney;

$beachJourney = new BeachJourney();
$beachJourney->takeATrip();

$thingsToDBeach = $beachJourney->getThingsToDo();

foreach ($thingsToDBeach as $task) {
    echo $task . '<br>';
}

echo '<br>' . '<br>';

$cityJourney = new CityJourney();
$cityJourney->takeATrip();

$thingsToDoCity = $cityJourney->getThingsToDo();

foreach ($thingsToDoCity as $task) {
    echo $task . '<br>';
}