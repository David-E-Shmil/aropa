<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $config): void {
    $config->paths([
        __DIR__ . '/src', // or your code folder
    ]);

    $config->sets([
        SetList::PHP_81, // you can change this to PHP_82 if needed
    ]);
};
