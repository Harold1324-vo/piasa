<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    /* Manejo de la solicitud entrante */
    public function handle($request, Closure $next, ...$guards)
    {
        /* Verificación si la solicitud debe pasar directamente sin autenticación según shouldPassThrough */
        if($this->shouldPassThrough($request)){
            return $next($request); //Se pasa la solicitud al siguiente Middleware en la cadena
        }

        return parent::handle($request, $next, ...$guards); //se devuelve el resultado
    }

    //Verificación si la solicitud debe pasar sin autenticación
    protected function shouldPassThrough($request){
        $allowedRoutes = ['usuarioBloqueado', 'login'];
        return in_array($request->route()->getName(), $allowedRoutes); //Obtención del nombre de la ruta actual
    }
}
