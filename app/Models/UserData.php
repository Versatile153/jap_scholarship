<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{

    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'current_school',
        'gpa',
        'family_income',
        'extracurricular_activities',
        'personal_statement',

    ];
}
