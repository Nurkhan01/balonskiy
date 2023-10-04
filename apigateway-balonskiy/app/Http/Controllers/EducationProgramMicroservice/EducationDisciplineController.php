<?php

namespace App\Http\Controllers\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationProgramMicroservice\EducationDisciplineRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Api\UserDataByTokenService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class EducationDisciplineController extends Controller
{
    private string $action = 'education-discipline';
    use HttpRequestTrait;

    /**
     * Получает данные об образовательных дисциплинах отправив запрос на микросервис образовательных программ
     * @param HttpRequestService $service
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->educationProgramPort", "$this->action");
    }

    /**
     * Получает все дисциплины по названию отправив запрос на микросервис образовательных программ
     * @param HttpRequestService $service
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getEducationDisciplinesByName(HttpRequestService $service, Request $request)
    {
        $name = $request->query('name');
        return $service->getDataByQueryParams("$this->educationProgramPort", "$this->action/get-education-disciplines-by-name", "name","$name");
    }

    /**
     * Создает данные об образовательных дисциплинах отправив запрос на микросервис  образовательных программ
     * @param Request $request
     * @param HttpRequestService $service
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(Request $request,UserDataByTokenService $userDataByTokenService, HttpRequestService $service)
    {
        $data = $request->all();
        $userData = $userDataByTokenService->getUsernameAndIdByToken($request);
        if ($data) {
            return $service->createDataWithLog("$this->educationProgramPort","$this->action/create",$data, $userData);
        }
        return 'Error';
    }

    /**
     * Изменяет данные об образовательных дисциплинах отправив запрос на микросервис  образовательных программ
     * @param Request $request
     * @param HttpRequestService $service
     * @param $id
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(Request $request, HttpRequestService $service, $id)
    {
        $data = $request->all();
        if ($data) {
            return $service->updateData("$this->educationProgramPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    /**
     * Удаляет данные об образовательных дисциплинах отправив запрос на микросервис  образовательных программ
     * @param HttpRequestService $service
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->educationProgramPort","$this->action/delete","$id");
    }
}
