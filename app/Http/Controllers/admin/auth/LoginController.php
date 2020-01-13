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

    public function LoginForm()
    {
        $login =  Auth::guard('admin')->logout();
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('admin.home'));
        }

        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }
}
