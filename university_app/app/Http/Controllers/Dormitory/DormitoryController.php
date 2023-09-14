<?php

namespace App\Http\Controllers\Dormitory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dermitory\DormitoryRequest;
use App\Http\Resources\Dermitory\DormitoryResource;
use App\Models\Dormitory;
use App\Services\Dormitory\DormitoryCreateService;
use App\Services\Dormitory\DormitoryUpdateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DormitoryController extends Controller
{
    /**
     * Отображает список данных в указанной таблице
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $comments = Dormitory::all();
        return DormitoryResource::collection($comments);
    }

    /**
     * Создает запись в базе данных обратившись в сервис в таблицу указанный в сервисе
     * @param DormitoryRequest $request
     * @return JsonResponse
     */
    public function create(DormitoryRequest $request)
    {
        $data = $request->validated();
        $service = new DormitoryCreateService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Обновляет запись в базе данных обратившись в сервис
     * @param DormitoryRequest $request
     * @param Dormitory $dormitory
     * @return JsonResponse
     */
    public function update(DormitoryRequest $request, Dormitory $dormitory)
    {
        $data = $request->validated();
        $service = new DormitoryUpdateService();
        $yourModel = $service->update($dormitory, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет указанную запись из таблицы в базе данных
     * @param Dormitory $dormitory
     * @return JsonResponse
     */
    public function delete(Dormitory $dormitory)
    {
        $dormitory->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
