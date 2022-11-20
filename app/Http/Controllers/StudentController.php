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

        return view('admin.allstudents',['students' => $students]);
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
        $user = $student->user()->first();

        return view('info.student', compact('student', 'user', 'courses'));
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao formEditStudent e edit
    |--------------------------------------------------------------------------
    |
    | Funcoes utilizadas para criar uma view de edicao de cadastro e fazer a
    | edicao de informacoes de cadastro
    |
    */

    public function formEditStudent(Student $student){
        return view('atualizar.a_student', ['student' => $student]);
    }

    public function edit(Student $student, Request $request){

        $student->nome = $request->nome;
        $student->CPF = $request->CPF;
        $student->CEP = $request->CEP;
        $student->endereco = $request->endereco;
        $student->complemento = $request->complemento;
        $student->bairro = $request->bairro;
        $student->cidade = $request->cidade;
        $student->filme = $request->filme;

        $student->save();

        return redirect()->back()->with('Dados atualizados com sucesso!!');
    }



}
