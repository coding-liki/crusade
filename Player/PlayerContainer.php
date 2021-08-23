<?php

namespace Player;

use Player\Models\Player;

class PlayerContainer
{
    private static ?Player $player = null;

    public static function setPlayer(Player $player)
    {
        self::$player = $player;
    }

    public static function getPlayer(): ?Player
    {
        return self::$player;
    }
}
