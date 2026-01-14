<?php

$arrWpServiceProvide = require __DIR__.'/../wp-ssr/arrServiceProvider.php';

return [
    App\Providers\AppServiceProvider::class,
    Corcel\Laravel\CorcelServiceProvider::class,
    // Wp\WpServiceProvider::class,
    ...$arrWpServiceProvide,
];
