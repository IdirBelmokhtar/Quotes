<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
<<<<<<< HEAD
            'id'  => $this->id,
            "desc_ar" => $this->desc_ar,
            "desc_en" => $this->desc_en,
            "source_ar" => $this->source_ar,
            "source_en" => $this->source_en,
            "category_id" => (int) $this->category_id,
            // "created_by" => $this->created_by,
=======
            'id' => $this->id,
            'desc_ar' => $this->desc_ar,
            'desc_en' => $this->desc_en,
            'source_ar' => $this->source_ar,
            'source_en' => $this->source_en,
            'category_id' => (int) $this->category_id,
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
