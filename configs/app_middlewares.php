<?php

use Http\Middlewares\HeadersMiddleware;
use Player\Middlewares\PlayerAuthMiddleware;

$app_middlewares = [
    HeadersMiddleware::class,
    PlayerAuthMiddleware::class
];
