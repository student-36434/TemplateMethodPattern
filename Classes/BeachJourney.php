<?php

namespace Classes;

require_once __DIR__ . '/Journey.php';

class BeachJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }

}