<?php

namespace Http\Request;

use Http\Request\RequestInterface;

class RequestContainer
{
    private static ?RequestInterface $request = null;
    public static function setRequest(RequestInterface $request)
    {
        self::$request = $request;
    }

    public static function getRequest(): ?RequestInterface
    {
        return self::$request;
    }
}
