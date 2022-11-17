<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;

class ProfessorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao index
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar os Professors para a view
    |
    */

    public function index(){
        
        $professors = Professor::all();

        return view('admin.allprofessors',['professors' => $professors]);
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
    | Funcao utilizada para cadastrar um novo Professor no banco de dados
    |
    */

    public function store(Request $request){

        Professor::create([
            'nome' => $request->nome,
            'CPF' => $request->CPF,
            'CEP' => $request->CEP,
            'endereco' => $request->endereco,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'user_id' => $request->user_id,
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
        $courses = $professor->courses()->get();

        return view('infoprofessor', compact('professor', 'courses'));
    }


    



    public function findprofessor($id) {

        $professor = Professor::find($id);
        
        return view('usuario', compact('professor'));

    }



}
