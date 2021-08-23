<?php

namespace Army\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей armyoption
 * 
 * Поля таблицы:
 * id: тип - integer
 * armyid: тип - integer
 * type: тип - text
 * value: тип - text
 * 
 */
class ArmyOption extends Model{
    protected $table_name = "armyoption";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'armyid' => ['type' => 'integer'],
        'type' => ['type' => 'text'],
        'value' => ['type' => 'text'],
    
    ];
}
