<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "logo" => $this->logo,
            "is_free" => $this->is_free,
            "type" => $this->type,
            "categorible_type" => $this->categorible_type,
            "categorible_id" => $this->categorible_id,
            "created_by" => $this->created_by,
        ];
    }
}
