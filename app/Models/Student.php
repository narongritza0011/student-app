<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'it1',
        'it2',
        'detail_learn_it',
        'introduce_it',
        'future_career',
        'comment_covid',

    ];
}
