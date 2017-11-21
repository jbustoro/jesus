<?php
namespace App\Http\Middleware;
use Closure;
use App\UsuPermitido;
use Illuminate\Http\Request;
class TienePermiso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Request::All) {//si esta en la base de datos
            return $next($request);
        }
        return redirect('/noTienePermiso');
    }
}