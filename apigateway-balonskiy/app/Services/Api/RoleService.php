<?php

namespace App\Services\Api;

use App\Services\Traits\HttpRequestTrait;
use GuzzleHttp\Client;

class RoleService
{
    use HttpRequestTrait;

    /**
     * Проверяет роли отправив запрос на микросервис пользователей
     * @param $request
     * @param $role
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function checkRole($request, $role)
    {
        try {
            $token = $request->header('Authorization');


            $client = new Client();
            $response = $client->post("{$this->host}:{$this->userPort}/api/auth/get-roles", [
                'headers' => ['Authorization' => $token],
            ]);

            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() === 200 && $data && $data['role'] === $role) {
                return true;
            }
            return false;
        } catch (\Exception $exception) {
            return false;
        }
    }
}
