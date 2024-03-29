<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Registration;

class IntlDelegatePhysical extends Model
{
    use HasFactory;

    protected $table = 'intl_delegate_physicals';
    protected $fillable = [
        'name'
    ];
}
