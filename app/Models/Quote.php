<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable =[
        'desc_ar',
        'desc_en',
        'source_ar',
        'source_en',
        'category_id',
        'created_by',
    ];


}
