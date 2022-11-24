<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarTraits extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'trait-1',
        'trait-2',
        'trait-3',
        'trait-4',
        'trait-5',
        'trait-6'
    ];
}
