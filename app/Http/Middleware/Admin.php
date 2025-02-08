<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $usercheck=User::where('id',1)->take(1)->value('isAdmin');
        $response = $next($request);
        if ($usercheck=='1') {
            // dd("BUKAN ADMIN");
            return $response;
        }
        return redirect('login');
    }
}
