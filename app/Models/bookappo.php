<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookappo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'address',
        'phone',
        'jam',
        'tanggal',
        'barber',
    ];
}
