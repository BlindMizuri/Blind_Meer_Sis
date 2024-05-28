<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'course',
        'status',
        'applied_rate',
        'fall_rate',
        'total_classes',
        'attended_classes',
        'registration_date',
    ];
}
