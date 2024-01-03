<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorshipPackage extends Model
{
    use HasFactory;

    protected $table = 'sponsorship_packages';
    protected $fillable = [
        'name'
    ];
}
