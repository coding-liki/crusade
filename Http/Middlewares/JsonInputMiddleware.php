<?php

namespace Http\Middlewares;

use CodingLiki\PhpMvc\App\Middlewares\Middleware;
use Http\Json\JsonInputContainer;

class JsonInputMiddleware extends Middleware
{
    public function start()
    {
        $input = file_get_contents('php://input');
        JsonInputContainer::setJson(json_decode($input, true));
    }
}
