<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        "font",
        "image",
        "is_free",
        "category_id",
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

=======
        'font_ar',
        'font_en',
        'image',
        'is_free',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
