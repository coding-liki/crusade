<?php

namespace Player\Middlewares;

use CodingLiki\PhpMvc\App\Middlewares\Middleware;
use Player\Exceptions\NotAuthorizedException;
use Player\PlayerContainer;

class OnlyAuthorisedPlayerMiddleware extends Middleware
{
    public function start()
    {
        if (PlayerContainer::getPlayer() === null) {
            throw new NotAuthorizedException();
        }
    }
}
