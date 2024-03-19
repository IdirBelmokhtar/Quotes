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
<<<<<<< HEAD
            'password' => $this->password,
=======
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
            'birth_date' => $this->birth_date,
            'nationality' => $this->nationality,
            'gender' => $this->gender,
            'status' => $this->status,
            'type' => $this->type,
            'category' => new CategoryResource($this->category),
            'theme' => new ThemeResource($this->theme),
<<<<<<< HEAD
=======

>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        ];
    }
}
