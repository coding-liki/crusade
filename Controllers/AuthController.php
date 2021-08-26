<?php

namespace Controllers;

use DateTime;
use Http\Json\Exceptions\JsonNotValidException;
use Http\Json\JsonInputContainer;
use Player\Models\Player;

class AuthController
{
    public function index()
    {
        view('register_login');
    }

    public function register()
    {
        [$login, $name, $password] = $this->getParameters();

        $existedPlayer = Player::find('login', $login);

        if ($existedPlayer instanceof Player) {
            return json_encode([
                'error' => 'login exists',
                'success' => false
            ]);
        }

        $player = Player::create(['name' => $name, 'login' => $login, 'passwordhash' => password_hash($password, PASSWORD_DEFAULT), 'createdat' => (new DateTime())->format(DATE_RFC822)]);

        return json_encode([
            'success' => true
        ]);
    }

    private function getParameters(): array
    {
        $jsonData = JsonInputContainer::getJson();

        if (!$this->validateJson($jsonData)) {
            throw new JsonNotValidException();
        }
        return [
            $jsonData['login'],
            $jsonData['name'],
            $jsonData['password'],
        ];
    }

    private function validateJson(array $json): bool
    {
        return isset($json['login']) && strlen($json['login']) > 5 && strlen($json['login']) < 20
            && isset($json['name']) && strlen($json['name']) > 5 && strlen($json['name']) < 256
            && isset($json['password']) && strlen($json['password']) > 5 && strlen($json['password']) < 256;
    }
}
