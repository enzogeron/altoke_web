<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ACLMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null, $permission = null)
    {

        // Si el usuario no inicio sesion, redireccionarlo al login
        if(Auth::guest()) {
            return redirect()->route('login');
        }

        // Verificar que el usuario cumpla con los roles
        if($role != null) { 
            if(! $request->user()->hasAnyRole(explode('|', $role))) {
                abort(403, 'No tienes el rol necesario.');
            }
        }

        // Verificar que el usuario cumpla con los permisos
        if($permission != null) {
            if(! $request->user()->can($permission)) {
                abort(403, 'No tienes el permiso necesario.');
            }
        }

        return $next($request);
        
    }
}
