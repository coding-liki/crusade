<?php

namespace Unit\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей unit
 * 
 * Поля таблицы:
 * id: тип - integer
 * armyid: тип - integer
 * name: тип - text
 * datasheetid: тип - integer
 * 
 */
class Unit extends Model{
    protected $table_name = "unit";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'armyid' => ['type' => 'integer'],
        'name' => ['type' => 'text'],
        'datasheetid' => ['type' => 'integer'],
    
    ];
}
