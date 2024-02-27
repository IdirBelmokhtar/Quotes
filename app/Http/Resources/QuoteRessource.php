<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuoteRessource extends JsonResource
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
            'desc_ar' => $this->desc_ar,
            'desc_en' => $this->desc_en,
            'source_ar' => $this->source_ar,
            'source_en' => $this->source_en,
            'caregory_id' => $this->caregory_id,
            'created_by' => $this->created_by,
        ];
    }
}
