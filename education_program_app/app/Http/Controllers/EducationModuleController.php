<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationModuleRequest;
use App\Http\Resources\EducationModuleResource;
use App\Models\EducationModule;
use App\Services\EducationModuleService;
use Illuminate\Http\Request;

class EducationModuleController extends Controller
{
    public function index(Request $request)
    {
        $education_program_id = $request->query('education_program_id', null);
        $modulesWithFormations = EducationModule::with('formations')->where('education_program_id', $education_program_id)->get();
        return response()->json(["data" => $modulesWithFormations]);
    }

    public function create(EducationModuleRequest $request)
    {
        $data = $request->validated(); // Получаем массив объектов из валидированного запроса
        $service = new EducationModuleService();

        $successCount = 0;
        foreach ($data as $item) {
            $yourModel = $service->create((array)$item); // Преобразуем объект в массив
            if ($yourModel) {
                $successCount++;
            }
        }

        if ($successCount === count($data)) {
            return response()->json(['message' => "All data added successfully"]);
        }
        return response()->json(['error' => 'Some data could not be added']);
    }


    public function update(EducationModuleRequest $request, EducationModule $dataId)
    {
        $data = $request->validated();
        $service = new EducationModuleService();
        $yourModel = $service->update($dataId, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    public function delete(EducationModule $dataId)
    {
        $dataId->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
