<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao index
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar os Courses para a view
    |
    */

    public function index(){
        
        $courses = Course::all();

        return view('welcome',['courses' => $courses]);
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
        return view('cadastro.m_course');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao store
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para cadastrar um novo Course no banco de dados
    |
    */

    public function store(Request $request){

        Course::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'des_simplificada' => $request->des_simplificada,
            'maximo' => $request->maximo,
            'minimo' => $request->minimo,
            'imagem' => $request->imagem,
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
    | Funcao utilizada para fazer um relacionamento Many to Many entre Students 
    | e Courses
    |
    */
    public function show(Course $course){
        
        $professor = $course->professor()->first();
        $students = $course->students()->get();

        return view('info.course', compact('course', 'professor', 'students'));

    }

    /*
    |--------------------------------------------------------------------------
    | Funcao joinCourse
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para utilizar e salvar os dados da tabela pivo 
    | course_student do relacionamento Many to Many entre Students e Courses
    |
    */
    public function joinCourse($id){

        $students = Student::all();

        foreach($students as $student){
            if(Auth::user()->id == $student?->user_id)
            {
                $student->courses()->attach($id);
            }
        }
        return redirect()->route('infostudent', compact('student'));
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao leaveCourse
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para utilizar e deletar os dados da tabela pivo 
    | course_student do relacionamento Many to Many entre Students e Courses
    |
    */
    public function leaveCourse($id){

        $students = Student::all();

        foreach($students as $student){
            if(Auth::user()->id == $student?->user_id)
            {
                $student->courses()->detach($id);
            }
        }
        return redirect()->back();
    }

}
