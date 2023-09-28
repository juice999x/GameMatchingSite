<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'looking_for_sex',
        'number_of_people',
        'intrested_in',
        'self_introduction',
    ];
}
