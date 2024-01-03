<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoothPackage extends Model
{
    use HasFactory;

    protected $table = 'booth_packages';
    protected $fillable = [
        'name'
    ];
}
