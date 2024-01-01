<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalDelegatePhysical extends Model
{
    use HasFactory;

    protected $table = 'local_delegate_physicals';
    protected $fillable = [
        'name'
    ];
}
