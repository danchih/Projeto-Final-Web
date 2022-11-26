<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Funcao index
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar os Users para a view
    |
    */

    public function index(){
        
        $users = User::all();

        return view('profile',['users' => $users]);
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
        return view('cadastro.user');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao store
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para cadastrar um novo User no banco de dados
    |
    */

    public function store(Request $request){

        $validator  = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required'
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $id_user = $user->id;

        return view('cadastro.matricula', ['id_user' => $id_user]);
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao formEditUser e edit
    |--------------------------------------------------------------------------
    |
    | Funcoes utilizadas para criar uma view de edicao de login e fazer a troca
    | de informacoes do usuario ja cadastrado
    |
    */

    public function formEditUser(User $user){
        return view('atualizar.a_user', ['user' => $user]);
    }

    public function edit(User $user, Request $request){

        $user->name = $request->name;
        $user->email = $request->email;

        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('admin');
    }


    /*
    |--------------------------------------------------------------------------
    | Funcao show
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para fazer um relacionamento One to One entre User e
    | Student 
    | ($name seria a mesma ideia de $id) 
    | (usuario seria a mesma coisa que $user_id))
    |
    */
    public function show($id){

        $user = User::where('id', $id)->first();
        $student = $user->student()->first();
        $professor = $user->professor()->first();

        return view('profile', compact('user', 'student', 'professor'));

    }

}
