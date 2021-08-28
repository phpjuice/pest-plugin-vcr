<?php

/**
 * Register The Auto Loader
 *
 * We are using our custom bootstrap file for phpunit,
 * in order for vcr to mock curl calls.
 * @see http://php-vcr.github.io/documentation/installation/
 */
require __DIR__.'/../vendor/autoload.php';

use VCR\VCR;

VCR::configure()->setCassettePath(__DIR__."/cassettes");
VCR::turnOn();