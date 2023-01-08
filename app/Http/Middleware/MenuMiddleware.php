<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuMiddleware
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
        $userLevel = auth()->user()->level;
        if ($userLevel == 'admin') {
            $menu = Menu::where('active', 'y')->get();
        } elseif ($userLevel == 'manager') {
            $menu = Menu::where('active', 'y')->where('level', '!=', 'admin')->get();
        } elseif ($userLevel == 'reseller') {
            $menu = Menu::where('active', 'y')->where('level', '!=', 'admin')->where('level', '!=', 'manager')->get();
        } elseif ($userLevel == 'customer') {
            $menu = Menu::where('active', 'y')->where('level', 'customer')->get();
        }
        view()->share('menu', $menu);
        return $next($request);
    }
}
