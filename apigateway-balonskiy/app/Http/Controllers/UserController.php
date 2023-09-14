<?php

namespace App\Http\Controllers;

use App\Services\Api\HttpRequestService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class UserController extends Controller
{
    public function index(HttpRequestService $service, Request $request) {
        $token = $request->header('Authorization'); // Получаем JWT-токен из заголовка запроса

        $client = new Client();
        $response = $client->post("$service->host:$service->userPort/api/auth/me", [
            'headers' => ['Authorization' => $token],
        ]);


        // Получение ответа от другого проекта
        $data = json_decode($response->getBody(), true);


        return $data;
        // Проверка успешности аутентификации
        if ($response->getStatusCode() === 200 && isset($data['access_token'])) {
            // Аутентификация прошла успешно, создаем JWT-токен
            $token = $data['access_token'];

            // Возвращаем JWT-токен в ответе
            return response()->json(['access_token' => $token]);
        }

        // Неверные учетные данные или ошибка аутентификации
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
