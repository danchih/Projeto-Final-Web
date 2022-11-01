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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/api', [StudentController::class, 'invoke']);
Route::get('/m_student', [StudentController::class, 'create']);
Route::post('/m_student', [StudentController::class, 'store']);

Route::get('/professors', [ProfessorController::class, 'index']);
Route::get('/m_professor', [ProfessorController::class, 'create']);
Route::post('/m_professor', [ProfessorController::class, 'store']);
