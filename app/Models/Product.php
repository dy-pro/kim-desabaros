<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_user',
        'name',
        'price',
        'id_category',
        'code',
        'stock',
        'image',
        'description',
    ];

    // Relasi Many to One ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi Many to One ke Kategori
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    
}
