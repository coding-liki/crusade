<?php

namespace Http\Json;

class JsonInputContainer
{
    private static array $json = [];

    public static function getJson(): array
    {
        return self::$json;
    }

    public static function setJson(array $json): void
    {
        self::$json = $json;
    }
}
