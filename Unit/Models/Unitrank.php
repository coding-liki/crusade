<?php

namespace Unit\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей unitrank
 * 
 * Поля таблицы:
 * id: тип - integer
 * unitid: тип - integer
 * rank: тип - text
 * achivedat: тип - timestamp without time zone
 * 
 */
class Unitrank extends Model{
    protected $table_name = "unitrank";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'unitid' => ['type' => 'integer'],
        'rank' => ['type' => 'text'],
        'achivedat' => ['type' => 'timestamp without time zone'],
    
    ];
}
