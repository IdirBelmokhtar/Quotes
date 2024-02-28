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
            "font" => $this->font,
            "image" => $this->image,
            "is_free" => $this->is_free,
            "category_id" => $this->category_id,
            "created_by" => $this->created_by,
        ];
    }
}
