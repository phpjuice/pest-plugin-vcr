<?php

declare(strict_types=1);

use function PHPJuice\PestPluginVcr\vcrTurnOff;
use function PHPJuice\PestPluginVcr\vcrTurnOn;

it('intercepts with cassette name', function () {

    vcrTurnOn('pest_test');

    $result = file_get_contents('https://pestphp.com/');

    expect($result)
        ->toBe('This is a annotation test dummy.');

    vcrTurnOff();
});


it('intercepts with cassette name and extension', function () {

    vcrTurnOn('pest_test.yml');

    $result = file_get_contents('https://pestphp.com/');

    expect($result)
        ->toBe('This is a annotation test dummy.');

    vcrTurnOff();
});
