<?php

namespace App\Http\Controllers\UniversityMicroservice\Department;

use App\Http\Controllers\Controller;
use App\Services\Api\HttpRequestService;
use App\Services\Api\UniversityIdService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DepartmentController extends Controller
{
    private string $action = 'department';
    use HttpRequestTrait;

    public function index(Request $request, UniversityIdService $universityIdService, HttpRequestService $service)
    {
        $universityId = $universityIdService->getUniversityIdByToken($request);
        return $service->getDataByQueryParams("$this->universityPort", "$this->action", "university_id", $universityId);
    }

    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->universityPort", "$this->action/create", $data);
        }
        return 'Error';
    }

    public function update(Request $request, HttpRequestService $service, $id)
    {
        $data = $request->all();
        if ($data) {
            return $service->updateData("$this->universityPort", "$this->action/update", $data, "$id");
        }
        return 'Error';
    }

    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->universityPort", "$this->action/delete", "$id");
    }
}
