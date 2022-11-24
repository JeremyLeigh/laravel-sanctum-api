<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarStats extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'str',
        'dex',
        'con',
        'int',
        'wis',
        'cha'
    ];
}
