<?php

namespace Classes;

require_once __DIR__ . '/Journey.php';

class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift(): ?string
    {
        return "Buy a gift";
    }
}