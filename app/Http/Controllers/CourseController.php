<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Course;
use App\Models\Student;
use App\Models\Professor;
use App\Models\Course_student;


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
    | Funcao utilizada para atualizar status
    |
    */
    public function show(Course $course){
        
        $professor = $course->professor()->first();
        $students = $course->students()->get();
        $notas = Course_student::where('course_id', $course->id)->get();

        if(count($students) >= $course->minimo){
            $status = Course::where('id', $course->id)->update(['status' => '2']);
        }

        if(count($students) === $course->maximo){
            $status = Course::where('id', $course->id)->update(['status' => '3']);
        }

        if(count($students) < $course->minimo){
            $status = Course::where('id', $course->id)->update(['status' => '1']);
        }
        elseif(count($students) < $course->maximo){
            $status = Course::where('id', $course->id)->update(['status' => '2']);
        }

        return view('info.course', compact('course', 'professor', 'students', 'notas'));

    }

    /*
    |--------------------------------------------------------------------------
    | Funcao joinCourse
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para utilizar e salvar os dados da tabela pivo 
    | course_student do relacionamento Many to Many entre Students e Courses
    | Tambem utilizada para relacionar professor com course
    |
    */
    public function joinCourse($id){

        $students = Student::all();
        $professors = Professor::all();

        foreach($students as $student){
            if(Auth::user()->id == $student?->user_id)
            {
                $student->courses()->attach($id);
            }
        }

        foreach($professors as $professor){
            if(Auth::user()->id == $professor?->user_id)
            {
                $course = Course::where('id', $id)->update(['professor_id' => $professor->id]); 
            }
        }

        return redirect()->back();
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao leaveCourse
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para deletar os dados da tabela pivo course_student 
    | do relacionamento Many to Many entre Students e Courses
    | Tambem utilizada para deletar a relacao entre Professor e Course
    |
    */
    public function leaveCourse($id){

        $students = Student::all();
        $professors = Professor::all();

        foreach($students as $student){
            if(Auth::user()->id == $student?->user_id)
            {
                $student->courses()->detach($id);
            }
        }

        foreach($professors as $professor){
            if(Auth::user()->id == $professor?->user_id)
            {
                $course = Course::where('id', $id)->update(['professor_id' => null]); 
            }
        }

        return redirect()->back();
    }

}
