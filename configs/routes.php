<?php

/**
 * Файл с настройками путей
 */

use Controllers\AuthController;
use Controllers\IndexController;
use Player\Middlewares\PlayerAuthMiddleware;

/**
 * Список существующих путей
 *
 * вид
 * [
 *  <path> : regexp выражение для определения пути
 *  <controller@method> : путь до контроллера и название метода
 *  <middleware>  : путь до прослойки, либо массив путей
 * ]
 */
$routes = [
    [
        '/',
        IndexController::class
    ],
    [
        '/register',
        AuthController::class,
        'function' => 'register'
    ]
];
