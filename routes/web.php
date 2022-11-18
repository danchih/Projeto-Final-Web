<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

//Rota da Tela Inicial
Route::get('/', [CourseController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Rotas para o Login
Route::get('/admin', [AuthController::class, 'dashboard'])->name('admin');
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login/do', [AuthController::class, 'login'])->name('admin.login.do');


//Relacionamentos
Route::get('/usuario/{id}', [UserController::class, 'show']);
Route::get('/student/{student}', [StudentController::class, 'show']);
Route::get('/professor/{id}', [ProfessorController::class, 'show']);
Route::get('/course/{course}', [CourseController::class, 'show']);


//Rotas para a troca de Senha
Route::get('usuario/editar/{user}', [UserController::class, 'formEditUser'])->name('user.edit');
Route::put('usuario/edit/{user}', [UserController::class, 'edit'])->name('user.edit.do');


//Rotas para o Cadastro
Route::get('/user', [UserController::class, 'create'])->name('user.registro');
Route::post('/user/do', [UserController::class, 'store'])->name('user.registro.do');

Route::get('/matricula', [StudentController::class, 'create'])->name('matricula');

Route::post('/m_student/do', [StudentController::class, 'store'])->name('m_student.do');
Route::post('/m_professor/do', [ProfessorController::class, 'store'])->name('m_professor.do');

Route::get('/m_course', [CourseController::class, 'create']);
Route::post('/m_course/do', [CourseController::class, 'store']);


//Rotas de Dados
Route::get('/students', [StudentController::class, 'index']);
Route::get('/professors', [ProfessorController::class, 'index']);


