<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Apply extends Model
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
        'user_id',
        'type',
        'file',
        'disability_type',
        'status',
        'hasBPages',
        'hasVPassports',
        'isCitizen',
        'region',
        'eInst',
        'isPresident'


    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
