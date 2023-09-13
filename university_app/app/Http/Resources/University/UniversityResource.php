<?php

namespace App\Http\Resources\University;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UniversityResource extends JsonResource
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
            'city_id'=> $this->city_id,
            'computers_count' => $this->computers_count,
            'internet_points_number' => $this->internet_points_number,
            'internet_speed' => $this->internet_speed,
            'intercollegiate_library_access' => $this->intercollegiate_library_access,
            'total_grant_funding' => $this->total_grant_funding,
            'email' => $this->email,
            'has_corporate_governance_bodies' => $this->has_corporate_governance_bodies,
            'science_funding_amount' => $this->science_funding_amount,
            'science_funding_type_id' => $this->science_funding_type_id,
        ];
    }
}
