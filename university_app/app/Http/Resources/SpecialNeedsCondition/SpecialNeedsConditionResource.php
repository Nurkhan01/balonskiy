<?php

namespace App\Http\Resources\SpecialNeedsCondition;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecialNeedsConditionResource extends JsonResource
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
            'university_id' => $this->university_id,
            'entrance_count' => $this->entrance_count,
            'sanitary_facilities_count' => $this->sanitary_facilities_count,
            'help_button_count' => $this->help_button_count,
            'has_ramps__or_lifts' => $this->has_ramps__or_lifts,
            'has_stairs_with_handrails' => $this->has_stairs_with_handrails,
            'has_special_parkings' => $this->has_special_parkings,
            'has_navigation_means' => $this->has_navigation_means,
            'has_stairs_constrast_color' => $this->has_stairs_constrast_color,
        ];
    }
}
