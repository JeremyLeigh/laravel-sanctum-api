<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarSpd extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'speed-1',
        'speed-2',
        'speed-3',
        'speed-4',
        'speed-5',
        'speed-6'
    ];
}
