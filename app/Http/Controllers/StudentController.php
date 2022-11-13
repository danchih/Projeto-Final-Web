<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        
        $students = Student::all();

        return view('students',['students' => $students]);
    }

    public function create(){
        return view('cadastro.m_student');
    }

    public function store(Request $request){

        Student::create([
            'nome' => $request->nome,
            'CPF' => $request->CPF,
            'CEP' => $request->CEP,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'filme' => $request->filme,
            'usuario' => $request->usuario,
            'senha' => $request->senha,
        ]);

        return redirect()->route('admin');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento One to One entre User e
    | Student 
    | (usuario seria a mesma coisa que $user_id))
    | ($name seria a mesma ideia de $id) 
    |
    */

    public function show($usuario){

        $student = Student::where('usuario', $usuario)->first();
        if($student){
            echo "<p>Usuario(student): { $student->usuario }</p>";
        }

        $user = $student->user()->first();
        if($user){
            echo "<p>Usuario(user): { $user->name }</p>";
        }
    }

}
