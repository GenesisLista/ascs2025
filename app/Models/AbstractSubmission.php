<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbstractSubmission extends Model
{
    use HasFactory;

    protected $table = 'abstract_submissions';
    protected $fillable = [
        'author',
        'email',
        'country',
        'code',
        'phone',
        'company',
        'presenter',
        'title',
        'biography',
        'theme_id',
        'poster_id',
        'abstract_path'
    ];
}
