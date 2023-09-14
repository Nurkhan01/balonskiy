<?php

namespace App\Http\Controllers\TeacherMicroservice\Teacher\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherMicroservice\Teacher\DegreeRequest;
use App\Http\Requests\TeacherMicroservice\Teacher\Publication\TeacherPublicationRequest;
use App\Http\Requests\TeacherMicroservice\TeacherDataRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class TeacherPublicationController extends Controller
{
    private string $action = 'teacher/publication';
    use HttpRequestTrait;

    /**
     * Получает данные о публикациях ППС отправив запрос на микросервис преподователей
     * @param HttpRequestService $service
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->teacherPort", "$this->action");
    }

    /**
     * Создает данные о публикациях ППС отправив запрос на микросервис преподователей
     * @param Request $request
     * @param HttpRequestService $service
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->teacherPort","$this->action/create",$data);
        }
        return 'Error';
    }

    /**
     * Изменяет данные о публикациях ППС отправив запрос на микросервис преподователей
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
            return $service->updateData("$this->teacherPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    /**
     * Удаляет данные о публикациях ППС отправив запрос на микросервис преподователей
     * @param HttpRequestService $service
     * @param $id
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->teacherPort","$this->action/delete","$id");
    }
}
