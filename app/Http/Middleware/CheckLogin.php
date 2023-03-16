<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('LogedUser') && ($request->path() !='admin/admin-area'))  {
            return redirect('admin/admin-area')->with('fail','You Must Be Logged in');
        }
        if (session()->has('LogedUser') && $request->path()=='admin/admin-area') {
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                              ->header('pragma','no-cache')
                              ->header('Expires','sat 01 jan 1990 00:00:00 GMT');
    }
}
