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
        switch ($guard) {
            case 'admin':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('administradors.adminHome');
                }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }
        /*if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/
<<<<<<< HEAD
=======
>>>>>>> a51a83b42a235fe6c96f99ede0d8e175a0bf94ea
        return $next($request);
    }
}
