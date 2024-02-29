<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ThemeResource extends JsonResource
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
            'font_ar' => $this->font_ar,
            'font_en'=> $this->font_en,
            'image' => $this->image,
            'is_free' => $this->is_free,
        ];
    }
}
