<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
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
        if($user = $request->user()){

            if ($user->is_admin === 1){
                return $next($request);

            } else{
                throw new HttpException(403);
            }

        } else {
            throw view('auth.login');
        }



    }
}
