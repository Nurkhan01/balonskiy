<?php

namespace App\Http\Resources\Building;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BuildingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name' => $this->name,
            'type' => $this->type,
            'expluatation_start_year' => $this->expluatation_start_year,
            'total_area' => $this->total_area,
            'classroom_area' => $this->classroom_area,
            'non_classroom_area' => $this->non_classroom_area,
        ];
    }
}
