<?php

namespace Http\Request;

class RequestWithHeaders implements RequestInterface
{
    private array $headers = [];

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getHeader(string $name): ?string
    {
        return $this->headers[strtolower($name)] ?? null;
    }
}
