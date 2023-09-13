<?php

namespace App\Http\Resources\Accreditation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccreditationResource extends JsonResource
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
            'university_id' => $this->university_id,
            'accreditation_body_id' => $this->accreditation_body_id,
            'report_links' => $this->report_links,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'accreditation_type_id' => $this->accreditation_type_id,
        ];
    }
}
