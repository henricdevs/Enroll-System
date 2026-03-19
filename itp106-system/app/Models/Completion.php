<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    protected $fillable = [
    'student_id',
    'subject_id'
    ];
}
