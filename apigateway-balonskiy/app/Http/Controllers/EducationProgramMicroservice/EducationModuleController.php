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
    public function index(HttpRequestService $service, Request $request)
    {
        $education_program_id = $request->query('education_program_id');
        return $service->getDataByQueryParams("$this->educationProgramPort", "$this->action", "education_program_id", $education_program_id);
    }


    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->educationProgramPort","$this->action/create",$data);
        }
        return 'Error';
    }
    public function update(Request $request, HttpRequestService $service, $id)
    {
        $data = $request->all();
        if ($data) {
            return $service->updateData("$this->educationProgramPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->educationProgramPort","$this->action/delete","$id");
    }
}
