<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        "name",
        "logo",
        "is_free",
        "type",
    ];

    public function themes(){
        return $this->hasMany(Theme::class);
    }

    public function quotes(){
        return $this->hasMany(Quote::class);
    }

=======
        'name',
        'logo',
        'is_free',
        'type',
    ];

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
}
