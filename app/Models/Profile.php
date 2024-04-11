<?php

// app/Models/Profile.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
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
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
