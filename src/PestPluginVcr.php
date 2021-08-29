<?php

declare(strict_types=1);

namespace PHPJuice\PestPluginVcr;

use VCR\VCR;

function vcrTurnOn(string $cassetteName)
{
    if (empty($cassetteName)) {
        return;
    }

    // If the cassette name ends in .json, then use the JSON storage format
    if (substr($cassetteName, -5) === '.json') {
        VCR::configure()->setStorage('json');
    }

    VCR::turnOn();
    VCR::insertCassette($cassetteName);
}

function vcrTurnOff()
{
    // To stop recording requests, eject the cassette
    VCR::eject();

    // Turn off VCR to stop intercepting requests
    VCR::turnOff();
}
