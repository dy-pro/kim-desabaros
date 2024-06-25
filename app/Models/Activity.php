<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
