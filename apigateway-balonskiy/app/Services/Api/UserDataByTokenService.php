<?php

namespace App\Services\Api;

use App\Services\Traits\HttpRequestTrait;
use GuzzleHttp\Client;

class UserDataByTokenService
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

    /**
     * Получает id университета у пользователя по токену отправив запрос на микросервис пользователей
     * @param $request
     * @return false|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUniversityIdByToken($request)
    {
        try {
            $token = $request->header('Authorization');


            $client = new Client();
            $response = $client->post("{$this->host}:{$this->userPort}/api/auth/get-university-id", [
                'headers' => ['Authorization' => $token],
            ]);

            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() === 200 && $data) {
                return $data['university_id'];
            }
            return false;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function getUsernameAndIdByToken($request)
    {
        try {
            $token = $request->header('Authorization');


            $client = new Client();
            $response = $client->post("{$this->host}:{$this->userPort}/api/auth/get-name-and-id", [
                'headers' => ['Authorization' => $token],
            ]);

            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() === 200 && $data) {
                return $data;
            }
            return $data;
        } catch (\Exception $exception) {
            return 1;
        }
    }
}
