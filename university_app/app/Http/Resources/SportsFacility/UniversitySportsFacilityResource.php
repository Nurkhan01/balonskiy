<?php

namespace App\Http\Resources\SportsFacility;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UniversitySportsFacilityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
