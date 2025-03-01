<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    "type",
    "number",
    "hmo_name",
    "hmo_code",
    "hmo_no",
];
}
