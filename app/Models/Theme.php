<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = [
        'font_en',
        'font_ar',
        'image',
        'is_free',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
