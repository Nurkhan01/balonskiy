<?php

namespace App\Http\Controllers\EducationProgramMicroservice;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationProgramMicroservice\EducationModuleRequest;
use App\Http\Requests\EducationProgramMicroservice\LanguageRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class EducationModuleController extends Controller
{
    private string $action = 'education-module';
    use HttpRequestTrait;

    /**
     * Получает данные о модулях образования отправив запрос на микросервис образовательных программ
     * @param HttpRequestService $service
     * @param Request $request
     * @return mixed
     */
    public function index(HttpRequestService $service, Request $request)
    {
        $education_program_id = $request->query('education_program_id');
        return $service->getDataByQueryParams("$this->educationProgramPort", "$this->action", "education_program_id", $education_program_id);
    }

    /**
     * Создает данные о модулях образования отправив запрос на микросервис образовательных программ
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
     * Изменяет данные о модулях образования отправив запрос на микросервис образовательных программ
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
     * Удалить данные о модулях образования отправив запрос на микросервис образовательных программ
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
