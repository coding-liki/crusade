<?php

use Http\Middlewares\HeadersMiddleware;
use Http\Middlewares\JsonInputMiddleware;
use Player\Middlewares\PlayerAuthMiddleware;

$app_middlewares = [
    HeadersMiddleware::class,
    PlayerAuthMiddleware::class,
    JsonInputMiddleware::class,
];
