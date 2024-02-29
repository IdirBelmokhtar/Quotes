<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'user_name' => $this->user_name,
            'email' => $this->email,
            'password' => $this->password,
            'birth_date' => $this->birth_date,
            'nationality' => $this->nationality,
            'gender' => $this->gender,
            'status' => $this->status,
            'type' => $this->type,
            'category'=>   $this->category,
            'theme' =>   $this->theme,
        ];
    }
}
