<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntlDelegateOnline extends Model
{
    use HasFactory;

    protected $table = 'intl_delegate_onlines';
    protected $fillable = [
        'name'
    ];
}
