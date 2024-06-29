<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Community extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'address',
        'description',
        'logo',
        'visi',
        'misi',
        'id_user'
    ];
    
    // Relasi ke kegiatan (satu ke banyak)
    public function activities()
    {
        return $this->hasMany(Activity::class, 'id_community');
    }
}
