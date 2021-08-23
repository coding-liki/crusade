<?php

namespace Unit\Models;

use CodingLiki\PhpMvc\Models\Model;

/**
 * Модель для работы с таблицей unitoptionchange
 * 
 * Поля таблицы:
 * id: тип - integer
 * oprionid: тип - integer
 * oldvalue: тип - text
 * newvalue: тип - text
 * comment: тип - text
 * createdat: тип - timestamp without time zone
 * 
 */
class Unitoptionchange extends Model{
    protected $table_name = "unitoptionchange";
    protected static $db_name = "main";

    protected $table_scheme = [
        'id' => ['type' => 'integer'],
        'oprionid' => ['type' => 'integer'],
        'oldvalue' => ['type' => 'text'],
        'newvalue' => ['type' => 'text'],
        'comment' => ['type' => 'text'],
        'createdat' => ['type' => 'timestamp without time zone'],
    
    ];
}
