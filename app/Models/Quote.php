<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\text;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc_ar',
        'desc_en',
        'source_ar',
        'source_en',
        'category_id',
        
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

