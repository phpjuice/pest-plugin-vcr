<?php
declare(strict_types=1);

use VCR\VCR;
use function PHPJuice\PestPluginVcr\vcrTurnOff;
use function PHPJuice\PestPluginVcr\vcrTurnOn;

beforeAll(function () {
    VCR::configure()->setCassettePath(__DIR__."/cassettes");
    VCR::configure()->enableLibraryHooks(['curl']);
});

it('intercepts with cassette name', function () {

    vcrTurnOn('pest_test');

    expect(get('https://pestphp.com/'))
        ->toBe('This is a annotation test dummy.');

    vcrTurnOff();
});
