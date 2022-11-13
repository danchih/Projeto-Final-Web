<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['nome', 'CPF', 'CEP', 'endereco', 'complemento', 'bairro', 'cidade', 'filme', 'usuario', 'senha'];

    public function course() {
        return $this->belongsToMany('App\Models\Course', 'course_student', 'student_id', 'course_id');
    }

    // Relacionamento One (user) to One (student)
    public function user(){
        return $this->belongsTo(User::class, foreignKey: 'usuario', ownerKey: 'name');
    }


}
