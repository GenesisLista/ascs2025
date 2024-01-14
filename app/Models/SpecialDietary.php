<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialDietary extends Model
{
    use HasFactory;

    protected $table = 'special_dietaries';
    protected $fillable = [
        'name'
    ];
}
