<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['nome', 'CPF', 'CEP', 'endereco', 'complemento', 'bairro', 'cidade', 'filme','user_id'];

    // Relacionamento Many (courses) to Many (students)
    public function courses(){
        return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id');
    }

    // Relacionamento One (user) to One (student)
    public function user(){
        return $this->belongsTo(User::class, foreignKey: 'user_id', ownerKey: 'id');
    }

}
