<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalDelegateOnline extends Model
{
    use HasFactory;

    protected $table = 'local_delegate_onlines';
    protected $fillable = [
        'name'
    ];
}
