<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Funcao dashboard
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para checar ser o usuario existe
    | Caso exista ira retornar para a view admin.dashboard
    | Caso contrario ira retornar para a rota admin.login que pedira para 
    | reescrever os dados de acesso pois nao houve sucesso na hora do login
    |
    */

    public function dashboard(){

        if(Auth::check() === true){
            if(Auth::user()->email === 'secretaria@gmail.com'){
            return view(view: 'admin.dashboard');
            }else{
                return view('arealogada');
            }
        }
        return redirect()->route(route: 'admin.login');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao showLoginForm
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para retornar à view admin.formLogin
    | Resumidamente seria uma maneira de acessar a visualizacao da tela de Login
    |
    */


    public function showLoginForm(){

        return view(view: 'admin.formLogin');
    }

    /*
    |--------------------------------------------------------------------------
    | Funcao login
    |--------------------------------------------------------------------------
    |
    | Funcao utilizada para checar se existe o usuario que deseja logar
    | Caso exista ira retornar para a rota admin onde sera possivel ver esta
    | pagina agora logado
    | Caso contrario ira retornar para a rota anterior (rota de login) aparecendo  
    | um aviso de erro de dados informados
    |
    */

    public function login(Request $request)
    {
        /** var_dump($request->all()); */

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        /**
         * Auth::attempt(); = tentativa de login com os parametros de credentials
         */
        if(Auth::attempt($credentials)){
            return redirect()->route(route: 'admin');
        }else{
            return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
        }
    }

}
