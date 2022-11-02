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
        return view('matricula.m_professor');
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

        return redirect('/');
    }

}
