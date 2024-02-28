<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'is_free',
        'type',
        'categorible_type',
        'categorible_id',
        'category_id'
    ];
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
    public function themes(){
        return $this->hasMany(Theme::class);
    }
}
