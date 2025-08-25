<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title','price','category_id','available_at','is_active','description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
