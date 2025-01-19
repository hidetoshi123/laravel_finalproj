<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'profile_picture',
        'name',
        'age',
        'grade',
        'contact',
    ];
}

