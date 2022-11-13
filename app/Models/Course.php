<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = ['nome', 'descricao', 'des_simplificada', 'maximo', 'minimo', 'status'];

    public function students() {
        return $this->belongsToMany('App\Models\Student', 'course_student', 'course_id', 'student_id');
    }

    //Relacionamento One (professor) to Many (courses)
    public function professor() {
        return $this->belongsTo(Professor::class, foreignKey: 'professor_id', ownerKey: 'id');
    }

}
