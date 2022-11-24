<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarAc extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'ac-num',
        'is-nat',
        'ac-mod',
        'ac-desc'
    ];
}
