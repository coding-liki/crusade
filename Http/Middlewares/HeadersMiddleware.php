<?php

namespace Http\Middlewares;

use CodingLiki\PhpMvc\App\Middlewares\Middleware;
use Http\Request\RequestContainer;
use Http\Request\RequestWithHeaders;

class HeadersMiddleware extends Middleware
{
    public function start()
    {
        $headers = getallheaders();

        foreach ($headers as $name => $value) {
            unset($headers[$name]);
            $name = strtolower($name);
            $headers[$name] = $value;
        }


        $request = new RequestWithHeaders();
        $request->setHeaders($headers);
        RequestContainer::setRequest($request);
    }
}
