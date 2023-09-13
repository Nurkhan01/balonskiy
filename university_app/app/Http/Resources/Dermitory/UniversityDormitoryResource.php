<?php

namespace App\Http\Resources\Dermitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UniversityDormitoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'dormitory_id' => $this->dormitory_id,
            'university_id' => $this->university_id
        ];
    }
}
