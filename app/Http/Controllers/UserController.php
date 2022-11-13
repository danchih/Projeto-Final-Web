<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento One to One entre User e
    | Student 
    | ($name seria a mesma ideia de $id) 
    | (usuario seria a mesma coisa que $user_id))
    |
    */
    public function show($name){

        $user = User::where('name', $name)->first();
        if($user){
            echo "<p>Usuario(user): { $user->name }</p>";
        }

        $student = $user->student()->first();
        if($student){
            echo "<p>Usuario(student): { $student->usuario }</p>";
        }
    }
}
