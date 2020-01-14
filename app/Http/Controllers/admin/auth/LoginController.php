<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $guard = 'admin';

    protected $redirectTo = '/admin/';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // Exibir pagina de login
    public function LoginForm()
    {
        // Caso seja aberta essa pagina sera feito o logout
        $login =  Auth::guard('admin')->logout();
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // Aplica o login no guard fazendo assim a autenticacao
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('admin.home'));
        }

        // Caso nao passe na verificação
        return back()->withErrors(['email' => 'Email ou Senha inválidos']);
    }

}
