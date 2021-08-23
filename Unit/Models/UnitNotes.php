<?php

namespace Unit\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей unitnotes
 * 
 * Поля таблицы:
 * id: тип - integer
 * unitid: тип - integer
 * notes: тип - text
 * createdat: тип - timestamp without time zone
 * 
 */
class Unitnotes extends Model{
    protected $table_name = "unitnotes";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'unitid' => ['type' => 'integer'],
        'notes' => ['type' => 'text'],
        'createdat' => ['type' => 'timestamp without time zone'],
    
    ];
}
