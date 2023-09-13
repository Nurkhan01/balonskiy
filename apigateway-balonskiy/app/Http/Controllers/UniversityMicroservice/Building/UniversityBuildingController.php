<?php

namespace App\Http\Controllers\UniversityMicroservice\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\UniversityMicroservice\Accreditation\AccreditationRequest;
use App\Http\Requests\UniversityMicroservice\Building\UniversityBuildingRequest;
use App\Services\Api\HttpRequestService;
use App\Services\Traits\HttpRequestTrait;
use Illuminate\Http\Request;

class UniversityBuildingController extends Controller
{
    private string $action = 'university-building';
    use HttpRequestTrait;
    public function index(HttpRequestService $service)
    {
        return $service->getData("$this->universityPort", "$this->action");
    }


    public function create(Request $request, HttpRequestService $service)

    {
        $data = $request->all();
        if ($data) {
            return $service->createData("$this->universityPort","$this->action/create",$data);
        }
        return 'Error';
    }
    public function update(Request $request, HttpRequestService $service, $id)
    {
        $data = $request->all();
        if ($data) {
            return $service->updateData("$this->universityPort","$this->action/update",$data,"$id");
        }
        return 'Error';
    }

    public function delete(HttpRequestService $service, $id)
    {
        return $service->deleteData("$this->universityPort","$this->action/delete","$id");
    }
}
