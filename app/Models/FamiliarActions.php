<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliarActions extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'action-1',
        'action-2',
        'action-3',
        'action-4',
        'action-5',
        'b-action-1',
        'b-action-2',
        'b-action-3',
        'b-action-4',
        'reaction-1',
        'reaction-2',
        'reaction-3'
    ];
}
