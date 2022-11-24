<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarHp extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'max-hp',
        'hit-dice-num',
        'hit-dice-type'
    ];
}
