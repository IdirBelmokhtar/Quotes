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
        'caregory_id',
        'created_by',
    ];
    public function caregory()
    {
        return $this->belongsTo(Category::class);
    }

}

