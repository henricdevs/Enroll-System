<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prerequisite extends Model
{
    protected $fillable = [
        'subject_id',
        'prerequisite_subject_id'
    ];
}