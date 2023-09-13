<?php

namespace App\Http\Controllers\StudentMicroservice\Student;

use App\Http\Controllers\Controller;

use App\Http\Requests\StudentMicroservice\Student\StudentSportsCategoryRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class StudentSportsCategoryController extends Controller
{
    private string $action = 'student/sports-category';
    use HttpRequestTrait;
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->studentPort", "$this->action");
    }


    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->studentPort","$this->action/create",$data);
        }
        return 'Error';
    }
    public function update(Request $request, HttpRequestService $service, $id)
    {
        $data = $request->all();
        if ($data) {
            return $service->updateData("$this->studentPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->studentPort","$this->action/delete","$id");
    }
}
