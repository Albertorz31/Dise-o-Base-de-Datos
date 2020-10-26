<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect('administradors/adminHome');
            }
            else if ($guard == "profesor" && Auth::guard($guard)->check()) {
                return redirect('profesors/profesorHome');
            }
            else if ($guard == "estudiante" && Auth::guard($guard)->check()) {
                return redirect('estudiantes/estudianteHome');
            }
            else if ($guard == "coordinador" && Auth::guard($guard)->check()) {
                return redirect('coordinadors/coordinadorHome');
            }
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
            return $next($request);
        }
}