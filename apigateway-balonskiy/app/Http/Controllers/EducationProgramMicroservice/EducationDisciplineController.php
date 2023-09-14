<?php

namespace App\Http\Controllers\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationProgramMicroservice\EducationDisciplineRequest;
use App\Services\Api\HttpRequestService;
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
     * Создает данные об образовательных дисциплинах отправив запрос на микросервис  образовательных программ
     * @param Request $request
     * @param HttpRequestService $service
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->educationProgramPort","$this->action/create",$data);
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
