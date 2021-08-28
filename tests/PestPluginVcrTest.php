<?php

declare(strict_types=1);

use VCR\VCR;
use function PHPJuice\PestPluginVcr\vcrTurnOff;
use function PHPJuice\PestPluginVcr\vcrTurnOn;

beforeEach(function () {
    VCR::configure()->setCassettePath(__DIR__."/cassettes");
});

it('intercepts with cassette name', function () {

    vcrTurnOn('pest_test');

    expect(get('https://pestphp.com/'))
        ->toBe('This is a annotation test dummy.');

    vcrTurnOff();
});
