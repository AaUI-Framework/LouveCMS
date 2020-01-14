<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Varifica se o guard que esta logado é um admin ou web
        if(Auth::guard('admin')->check()){
            return $next($request);
        }elseif(Auth::guard('web')->check())
        {
            // Retorna erro 404 caso o usuario não seja um admin
            return abort(404);
        }

        // Caso nenhum guard esteja logado retorna pagina de login do admin
        return redirect()->route('admin.login');
    }
}
