<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'career';
    protected $fillable = [
        'job_position',
        'experience',
        'job_type',
        'location',
        'qualification',
        'skills',
        'working_days',
        'content',
    ];
}
