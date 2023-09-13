<?php

namespace App\Http\Controllers\TeacherMicroservice\Teacher\Training;

use App\Http\Controllers\Controller;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class TeacherTrainingController extends Controller
{
    private string $action = 'teacher/training';
    use HttpRequestTrait;
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->teacherPort", "$this->action");
    }


    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->teacherPort","$this->action/create",$data);
        }
        return 'Error';
    }
    public function update(Request $request, HttpRequestService $service, $id)
    {
        $data = $request->all();
        if ($data) {
            return $service->updateData("$this->teacherPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->teacherPort","$this->action/delete","$id");
    }
}
