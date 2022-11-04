<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        
        $courses = Course::all();

        return view('welcome',['courses' => $courses]);
    }
    
    public function create(){
        return view('matricula.m_course');
    }

    public function store(Request $request){

        Course::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'des_simplificada' => $request->des_simplificada,
            'maximo' => $request->maximo,
            'minimo' => $request->minimo,
            'status' => $request->status,
        ]);

        return redirect('/');
    }
}
