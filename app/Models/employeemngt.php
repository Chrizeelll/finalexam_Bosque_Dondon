<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemngt extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'add',
        'dob',
        'contact'
    ];
    
}
