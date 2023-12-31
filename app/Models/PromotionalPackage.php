<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionalPackage extends Model
{
    use HasFactory;

    protected $table = 'promotional_packages';
    protected $fillable = [
        'name'
    ];
}
