<?php

namespace Army\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей army
 * 
 * Поля таблицы:
 * id: тип - integer
 * playerid: тип - integer
 * name: тип - text
 * faction: тип - text
 * hidden: тип - boolean
 * createdat: тип - timestamp without time zone
 * 
 */
class Army extends Model{
    protected $table_name = "army";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'playerid' => ['type' => 'integer'],
        'name' => ['type' => 'text'],
        'faction' => ['type' => 'text'],
        'hidden' => ['type' => 'boolean'],
        'createdat' => ['type' => 'timestamp without time zone'],
    
    ];
}
