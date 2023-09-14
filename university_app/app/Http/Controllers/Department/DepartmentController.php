<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\DepartmentRequest;
use App\Http\Resources\Department\DepartmentResource;
use App\Models\Department;
use App\Services\Department\DepartmentCreateService;
use App\Services\Department\DepartmentUpdateService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $university_id = $request->query('university_id', null);
        if($university_id){
            $data = Department::where('university_id', $university_id)->get();
            return DepartmentResource::collection($data);
        }
        return response()->json(['error' => "University ID doesn't exists"], 422);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param DepartmentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(DepartmentRequest $request)
    {
        $data = $request->validated();

        $service = new DepartmentCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);

    }

    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param DepartmentRequest $request
     * @param Department $department
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        $data = $request->validated();

        $service = new DepartmentUpdateService();
        $yourModel = $service->update($department, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);

    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Department $department
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Department $department)
    {

        $department->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
