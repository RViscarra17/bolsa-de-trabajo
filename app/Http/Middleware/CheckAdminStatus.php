<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckAdminStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && !$request->user()->is_admin) {
            return $next($request);
        }
        return response()->json(array('message' => 'No tiene permiso para realizar esta acción'), Response::HTTP_FORBIDDEN);
    }
}
