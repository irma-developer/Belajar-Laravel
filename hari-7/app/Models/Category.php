<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // tambahkan field yang boleh diisi mass assignment
    protected $fillable = [
        'name',   // sesuaikan dengan kolom di tabel categories
        'description',
    ];

    public function products()
{
    return $this->hasMany(Produk::class, 'category_id');
}

}
