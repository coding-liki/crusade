<?php

namespace Unit\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей datasheet
 * 
 * Поля таблицы:
 * id: тип - integer
 * url: тип - text
 * 
 */
class Datasheet extends Model{
    protected $table_name = "datasheet";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'url' => ['type' => 'text'],
    
    ];
}
