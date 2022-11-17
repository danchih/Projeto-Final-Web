<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
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
    | Funcoes utilizadas para criar uma view de troca de senha e fazer a troca
    | de senha do usuario ja cadastrado
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


}
