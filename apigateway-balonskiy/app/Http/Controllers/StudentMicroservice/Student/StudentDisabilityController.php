<?php

namespace App\Http\Controllers\StudentMicroservice\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentMicroservice\Student\StudentDisabilityRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class StudentDisabilityController extends Controller
{
    private string $action = 'student/disability';
    use HttpRequestTrait;

    /**
     * Получает данные об инфалидности студентов отправив запрос на микросервис студентов
     * @param HttpRequestService $service
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->studentPort", "$this->action");
    }

    /**
     * Создает данные об инфалидности студентов отправив запрос на микросервис студентов
     * @param Request $request
     * @param HttpRequestService $service
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->studentPort","$this->action/create",$data);
        }
        return 'Error';
    }

    /**
     * Изменяет данные об инфалидности студентов отправив запрос на микросервис студентов
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
            return $service->updateData("$this->studentPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    /**
     * Удаляет данные об инфалидности студентов отправив запрос на микросервис студентов
     * @param HttpRequestService $service
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->studentPort","$this->action/delete","$id");
    }
}
