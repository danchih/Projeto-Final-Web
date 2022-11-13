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
        return view('cadastro.m_course');
    }

    public function store(Request $request){

        Course::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'des_simplificada' => $request->des_simplificada,
            'maximo' => $request->maximo,
            'minimo' => $request->minimo,
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
    public function show(Course $course){

        echo "<p>Nome do Curso(courses): { $course->nome }</p>";

        $professor = $course->professor()->first();
        if($professor){
            echo "<p>Nome(professor): { $professor->nome }</p>";
        }
    
    }
}
