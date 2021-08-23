<?php

namespace Http\Helpers;

use Http\Request\RequestContainer;
use Http\Request\RequestWithHeaders;

class RequestHelper
{
    public static function getRequestWithHeaders(): RequestWithHeaders
    {
        return RequestContainer::getRequest();
    }
}
