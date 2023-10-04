<?php

namespace App\Services\Api;

use App\Services\Traits\HttpRequestTrait;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HttpRequestService
{
    use HttpRequestTrait;

    /**
     * Отправляет GET запрос по указанному URL на микросервисы для получения данных
     * @param $port
     * @param $route
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getData($port, $route)
    {
        $client = new Client;
        $response = $client->get("$this->host:$port/api/$route");
        return json_decode($response->getBody(), true);
    }

    /**
     * Отправляет GET запрос c Query параметрами по указанному URL на микросервисы для получения данных
     * @param $port
     * @param $route
     * @param $queryKey
     * @param $queryValue
     * @return mixed
     */
    public function getDataByQueryParams($port, $route, $queryKey, $queryValue)
    {
        $response = Http::get("$this->host:$port/api/$route", ["$queryKey" => "$queryValue"]);
        return json_decode($response->getBody(), true);
    }

    /**
     * Отправляет POST запрос по указанному URL на микросервисы для добавления данных которые передаются в теле запроса
     * @param $port
     * @param $route
     * @param $validData
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createData($port, $route, $validData)
    {
        $client = new Client;
        $response = $client->post("$this->host:$port/api/$route", [
            'form_params' => $validData,
        ]);
        return json_decode($response->getBody(), true);
    }
    public function createDataWithLog($port, $route, $validData, $userData)
    {
        $client = new Client;
        $response = $client->post("$this->host:$port/api/$route?name=${userData["name"]}&id=${userData["id"]}", [
            'form_params' => $validData,
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * Отправляет PUT запрос по указанному URL на микросервисы для изменения данных по указанному id
     * @param $port
     * @param $route
     * @param $validData
     * @param $id
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateData($port, $route, $validData, $id)
    {
        $client = new Client;
        $response = $client->put("$this->host:$port/api/$route/$id", [
            'form_params' => $validData,
        ]);
        return json_decode($response->getBody(), true);
    }

    /**
     * Отправляет DELETE запрос по указанному URL на микросервисы для удаления данных по указанному id
     * @param $port
     * @param $route
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteData($port, $route, $id)
    {
        $client = new Client;
        $response = $client->delete("$this->host:$port/api/$route/$id");
        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody(), true);
        }
        return response()->json(['error' => "Server Error"]);
    }
}
