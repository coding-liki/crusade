<?php

namespace Player\Middlewares;

use CodingLiki\PhpMvc\App\Middlewares\Middleware;
use Firebase\JWT\JWT;
use Http\Helpers\RequestHelper;
use Throwable;

/**
 * Undocumented class
 */
class PlayerAuthMiddleware extends Middleware
{
    private const JWT_KEY = 'something very strange';
    public const ID_FIELD = 'playerId';
    /**
     * Undocumented function
     *
     * @return void
     */
    public function start()
    {
        $jwtToken = $this->getJwtToken();

        try {
            $jwtData = JWT::decode($jwtToken, self::JWT_KEY, ['RS512']);

            $playerId = $jwtData[self::ID_FIELD] ?? 0;
        } catch(Throwable $t){
            echo "{$t->getMessage()}";
        }
    }

    private function getJwtToken(): string
    {
        $request = RequestHelper::getRequestWithHeaders();
        $authHeader = $request->getHeader('authorization');
        return explode('Bearer ', $authHeader ?? "")[1] ?? "";
    }
}
