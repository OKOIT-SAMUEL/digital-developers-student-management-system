<?php
// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['your_name', 'reg_no', 'campus_email', 'programme', 'year', 'phone', 'status'];
}
