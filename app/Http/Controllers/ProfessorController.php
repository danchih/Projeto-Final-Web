<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index(){
        
        $professors = Professor::all();

        return view('professors',['professors' => $professors]);
    }
    
    public function create(){
        return view('cadastro.m_professor');
    }

    public function store(Request $request){

        Professor::create([
            'nome' => $request->nome,
            'CPF' => $request->CPF,
            'CEP' => $request->CEP,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
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
    | Funcao utilizada para fazer um relacionamento One to Many entre Professor
    | e Courses
    |
    */
    public function show($id){

        $professor = Professor::where('id', $id)->first();
        if($professor){
            echo "<p>Nome(professor): { $professor->nome }</p>";
        }

        $courses = $professor->courses()->get();
        if($courses){
            foreach($courses as $course){
                echo "<p>Nome do Curso(courses): { $course->nome }</p>";
            };
        }
    }



}
