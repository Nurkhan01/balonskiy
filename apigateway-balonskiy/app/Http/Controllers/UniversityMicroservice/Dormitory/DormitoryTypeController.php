<?php

namespace App\Http\Controllers\UniversityMicroservice\Dormitory;

use App\Http\Controllers\Controller;
use App\Http\Requests\UniversityMicroservice\Accreditation\AccreditationRequest;
use App\Http\Requests\UniversityMicroservice\Dormitory\DormitoryTypeRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class DormitoryTypeController extends Controller
{
    private string $action = 'dormitory-type';
    use HttpRequestTrait;

    /**
     * Получает данные о типах общежитии отправив запрос на микросервис университетов
     * @param HttpRequestService $service
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->universityPort", "$this->action");
    }

    /**
     * Создает данные о типах общежитии отправив запрос на микросервис университетов
     * @param Request $request
     * @param HttpRequestService $service
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->universityPort","$this->action/create",$data);
        }
        return 'Error';
    }

    /**
     * Изменяет данные о типах общежитии отправив запрос на микросервис университетов
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
            return $service->updateData("$this->universityPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    /**
     * Удаляет данные о типах общежитии отправив запрос на микросервис университетов
     * @param HttpRequestService $service
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     */
    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->universityPort","$this->action/delete","$id");
    }
}
