<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\IntlDelegatePhysical;

class Registration extends Model
{
    use HasFactory;

    protected $table = 'registrations';
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
        'idpa_id',
        'ldpa_id',
        'idoa_id',
        'ldoa_id'
    ];
}
