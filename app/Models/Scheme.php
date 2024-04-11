<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    protected $fillable = ['name', 'type', 'expiry_date', 'details','grade','amount','status'];
}
