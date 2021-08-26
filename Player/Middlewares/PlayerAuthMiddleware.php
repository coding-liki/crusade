<?php

namespace Player\Middlewares;

use CodingLiki\PhpMvc\App\Middlewares\Middleware;
use Firebase\JWT\JWT;
use Http\Helpers\RequestHelper;
use Player\Models\Player;
use Player\PlayerContainer;
use Throwable;

/**
 * Undocumented class
 */
class PlayerAuthMiddleware extends Middleware
{
    private const JWT_KEY = 'something very strange';
    public const ID_FIELD = 'playerId';


    public function start()
    {
        $jwtToken = $this->getJwtToken();

        try {
            $jwtData = JWT::decode($jwtToken, self::JWT_KEY, ['RS512']);

            $playerId = $jwtData[self::ID_FIELD] ?? 0;
            $player = Player::find($playerId);
            PlayerContainer::setPlayer($player);
        } catch (Throwable $t) {
        }
    }

    private function getJwtToken(): string
    {
        $request = RequestHelper::getRequestWithHeaders();
        $authHeader = $request->getHeader('authorization');
        return explode('Bearer ', $authHeader ?? "")[1] ?? "";
    }
}
