<?php

namespace App\Http\Middleware;

use App\Services\Api\HttpRequestService;
use Closure;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiAuth
{
    protected $service;

    public function __construct(HttpRequestService $service)
    {
        $this->service = $service;
    }
    public function handle(Request $request, Closure $next)
    {
        /**
         * Отправляет запрос на микросервис пользователей для аутентификации
         */
        try {
            $token = $request->header('Authorization');

            $client = new Client();
            $response = $client->post("{$this->service->host}:{$this->service->userPort}/api/auth/me", [
                'headers' => ['Authorization' => $token],
            ]);

            $data = json_decode($response->getBody(), true);

            if ($response->getStatusCode() === 200 && $data) {
                return $next($request);
            }
        } catch (\Exception $exception) {
            abort('401', 'Unauthorized');
        }

    }
}
