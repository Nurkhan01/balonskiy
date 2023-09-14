<?php

namespace App\Http\Resources\Dermitory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DormitoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ,
            'dormitory_type_id' => $this->dormitory_type_id ,
            'expluatation_start_year' => $this->expluatation_start_year ,
            'area' => $this->area ,
            'payment_per_month' => $this->payment_per_month ,
            'payment_per_year' => $this->payment_per_year
        ];
    }
}
