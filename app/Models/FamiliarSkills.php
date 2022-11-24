<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarSkills extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'skill-1',
        'skill-2',
        'skill-3',
        'skill-4',
        'skill-5',
        'skill-6',
        'skill-7',
        'skill-8',
        'skill-9'
    ];
}
