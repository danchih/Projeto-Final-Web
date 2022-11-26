<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_student extends Model
{
    use HasFactory;

    protected $table = 'course_student';
    protected $fillable = ['student_id', 'course_id', 'nota'];

}
