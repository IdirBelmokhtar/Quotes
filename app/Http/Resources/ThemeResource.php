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
<<<<<<< HEAD
            "font" => $this->font,
            "image" => $this->image,
            "is_free" => $this->is_free,
            // "category_id" => $this->category_id,
            'category' => new CategoryResource($this->category)
=======
            'id' => $this->id,
            'font_ar' => $this->font_ar,
            'font_en'=> $this->font_en,
            'image' => $this->image,
            'is_free' => $this->is_free,
            'category' => new CategoryResource($this->category),
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
