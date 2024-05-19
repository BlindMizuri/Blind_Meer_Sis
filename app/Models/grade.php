<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'grade',
        'quiz1',
        'quiz2',
        'quiz3',
        'homework',
        'participation',
        'project',
        'midterm',
        'final_exam'
    ];
}
