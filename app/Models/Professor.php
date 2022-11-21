<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'CPF', 'CEP', 'endereco', 'complemento', 'bairro', 'cidade', 'user_id'];

    //Relacionamento One (professor) to Many (courses)
    public function courses(){
        return $this->hasMany(Course::class, foreignKey: 'professor_id', localKey: 'id');
    }

    // Relacionamento One (user) to One (professor)
    public function user(){
        return $this->belongsTo(User::class, foreignKey: 'user_id', ownerKey: 'id');
    }

}
