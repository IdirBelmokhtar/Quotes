<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        "desc_ar",
        "desc_en",
        "source_ar",
        "source_en",
        "category_id",
    ];

    public function category(){
=======
        'desc_ar',
        'desc_en',
        'source_ar',
        'source_en',
        'category_id',
    ];

    public function category()
    {
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
        return $this->belongsTo(Category::class);
    }
}
