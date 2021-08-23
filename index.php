<?php

error_reporting(E_ALL);

use CodingLiki\PhpMvc\App\App;

require_once "./vendor/CodingLiki/OoAutoloader/Autoloader.php";
require_once "./vendor/CodingLiki/View/include/helpers.php";

$app = App::getInstance();

$app->start("app_middlewares", [ "routes.routes" ]);
