<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregbio extends Model
{

use HasFactory;
protected $fillable = [

    'user_id',
    "total_preg",
    "total_liv_children",
    "lmp",
    "mage",
    "edd",
    "ip_num",
    "op_num",
    "preg_duration"
];
}
