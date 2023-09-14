<?php

namespace App\Http\Controllers;

use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class AuthController extends Controller
{
    use HttpRequestTrait;

    /**
     * Проверяет аутентификацию пользователя и возвращает токен по указанному пользователю
     * @param HttpRequestService $service
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(HttpRequestService $service,Request $request) {
        // Проверка учетных данных пользователя
        $credentials = $request->only('email', 'password');

        // Отправка запроса на аутентификацию к другому проекту Laravel
        $client = new Client();
        $response = $client->post("$this->host:$this->userPort/api/auth/login", [
            'form_params' => $credentials,
        ]);
        // Получение ответа от другого проекта
        $data = json_decode($response->getBody(), true);

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

    /**
     * Перевыпускает токен проверив активный токен на валидность
     * @param HttpRequestService $service
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refresh(HttpRequestService $service,Request $request) {
        $token = $request->header('Authorization');
        $client = new Client();
        $response = $client->post("$this->host:$this->userPort/api/auth/refresh", [
            'headers' => ['Authorization' => $token],
        ]);
        // Получение ответа от другого проекта
        $data = json_decode($response->getBody(), true);

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
