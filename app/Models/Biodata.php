<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'lname', 'fname', 'mname', 'address',  'age', 'occupation',
        'phone_no', 'place_of_origin', 'tribe', 'nok_name', 'nok_address',
        'nok_phone', 'file_cat', 'user_id', 'sex'
    ];


}
