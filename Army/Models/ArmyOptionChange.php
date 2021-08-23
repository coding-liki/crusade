<?php

namespace Army\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей armyoptionchange
 * 
 * Поля таблицы:
 * id: тип - integer
 * optionid: тип - integer
 * oldvalue: тип - text
 * newvalue: тип - text
 * createdat: тип - timestamp without time zone
 * comment: тип - text
 * 
 */
class Armyoptionchange extends Model{
    protected $table_name = "armyoptionchange";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'optionid' => ['type' => 'integer'],
        'oldvalue' => ['type' => 'text'],
        'newvalue' => ['type' => 'text'],
        'createdat' => ['type' => 'timestamp without time zone'],
        'comment' => ['type' => 'text'],
    
    ];
}
