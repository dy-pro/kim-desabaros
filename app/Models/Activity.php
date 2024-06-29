<?php

namespace App\Models;

use App\Models\Community;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_community',
        'name',
        'image',
        'description',
        'datetime_start',
        'datetime_end',
    ];


    // Relasi ke komunitas (banyak ke satu)
    public function community()
    {
        return $this->belongsTo(Community::class, 'id_community');
    }
}
