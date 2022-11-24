<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarSenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'passive-perc',
        'sense-1',
        'sense-2',
        'sense-3',
        'sense-4',
        'sense-5'
    ];
}
