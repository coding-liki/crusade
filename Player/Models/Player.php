<?php

namespace Player\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей player
 * 
 * Поля таблицы:
 * id: тип - integer
 * name: тип - text
 * login: тип - text
 * passwordhash: тип - text
 * createdat: тип - timestamp without time zone
 * 
 */
class Player extends Model{
    protected $table_name = "player";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'name' => ['type' => 'text'],
        'login' => ['type' => 'text'],
        'passwordhash' => ['type' => 'text'],
        'createdat' => ['type' => 'timestamp without time zone'],
    
    ];
}
