<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            "logo"=> $this->logo,
            "type"=> $this->type,
            "is_free"=> $this->is_free,
            "created_by"=> $this->created_by,
            "categorible_id"=> $this->categorible_id,
            "categorible_type"=> $this->categorible_type
        ];
    }
}
