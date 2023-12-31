<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageRequest;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use App\Services\LanguageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LanguageController extends Controller
{
    /**
     * Получает все данные из таблицы language
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        $data = Language::all();
        return LanguageResource::collection($data);
    }

    /**
     * Создает данные в таблицу language ссылаясь на сервис LanguageService
     * @param LanguageRequest $request
     * @return JsonResponse
     */
    public function create(LanguageRequest $request)
    {
        $data = $request->validated();
        $service = new LanguageService();
        $yourModel = $service->create($data);
        if ($yourModel) {
            return response()->json(['message' => "Data added successfully"]);
        }
        return response()->json(['error' => 'An error occurred while added data']);
    }


    /**
     * Изменяет данные в таблице language ссылаясь на сервис LanguageService
     * @param LanguageRequest $request
     * @param Language $language
     * @return JsonResponse
     */
    public function update(LanguageRequest $request, Language $language)
    {
        $data = $request->validated();
        $service = new LanguageService();
        $yourModel = $service->update($language, $data);
        if ($yourModel) {
            return response()->json(['message' => "Data updated successfully"]);
        }
        return response()->json(['error' => 'An error occurred while updated data']);
    }

    /**
     * Удаляет данные из таблицы language
     * @param Language $language
     * @return JsonResponse
     */
    public function delete(Language $language)
    {
        $language->delete();
        return response()->json(['message' => "Data has been deleted"]);
    }
}
