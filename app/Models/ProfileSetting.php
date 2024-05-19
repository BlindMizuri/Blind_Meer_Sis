<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'Student_id',
        'password',
        'email',
        'phone_number',
        'second_phone_number',
        'profile_picture'
    ];
}
