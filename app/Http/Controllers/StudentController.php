<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao index
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar os Students para a view
    |
    */

    public function index(){
        
        $students = Student::all();

        return view('students',['students' => $students]);
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao create
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para criar uma pagina de cadastro 
    |
    */

    public function create(){
        return view('cadastro.matricula');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao store
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para cadastrar um novo Student no banco de dados
    |
    */

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
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento Many to Many entre Courses
    | e Students 
    |
    */

    public function show(Student $student){

        $courses = $student->courses()->get();

        return view('infostudent', compact('student', 'courses'));
    }



}
