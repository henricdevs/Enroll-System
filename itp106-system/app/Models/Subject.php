<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'code',
        'title',
        'units',
        'level_id'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function prerequisites()
    {
        return $this->belongsToMany(
            Subject::class,
            'prerequisites',
            'subject_id',
            'prerequisite_subject_id'
        );
    }
}