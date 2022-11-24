<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarBasic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'unique-name',
        'creature-name',
        'size',
        'creature-type',
        'alignment',
        'description'
    ];
}
