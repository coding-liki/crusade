<?php

namespace Unit\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей unitoption
 * 
 * Поля таблицы:
 * id: тип - integer
 * unitid: тип - integer
 * type: тип - text
 * value: тип - text
 * 
 */
class Unitoption extends Model{
    protected $table_name = "unitoption";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'unitid' => ['type' => 'integer'],
        'type' => ['type' => 'text'],
        'value' => ['type' => 'text'],
    
    ];
}
