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
        return view('matricula.m_student');
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

        return redirect('/');
    }
    
    
    //public function update(Request $request, Comment $comment)
    //{
    //    $comment->comment = $request->comment;
    //    $comment->save();

    //    return redirect()->route('blogs.index')
    //    ->with('success','Comment edited successfully');
    //}

}
