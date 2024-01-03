<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $table = 'sponsorships';
    protected $fillable = [
        'email',
        'name',
        'designation',
        'company',
        'address',
        'city',
        'state',
        'country',
        'telephone_number',
        'country_code',
        'mobile_number',
        'sponsorship_id',
        'booth_id',
        'promotional_id'
    ];
}
