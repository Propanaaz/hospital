<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregnancy extends Model
{
    use HasFactory;
    protected $fillable = [
    "user_id",
    "dob",
    "preg_duration",
    "birth_weight",
    "preg_complication",
    "lab_complication",
    "premium"
    // "age_death",
    // "cause_death"
    ];

};
