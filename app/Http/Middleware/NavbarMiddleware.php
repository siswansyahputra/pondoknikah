<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Notifications;
use App\Models\Identity;
use Illuminate\Http\Request;

class NavbarMiddleware
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
        $user = auth()->user();
        $notifi = Notifications::where('notifiable_id', $user->id)->where('read_at', NULL)->get();
        $countNotifi = Notifications::where('notifiable_id', $user->id)->where('read_at', NULL)->count();
        $navbar = [
            'identity' => Identity::find(),
            'title' => "Home",
            'notifi' => $notifi,
            'countNotifi' => $countNotifi
        ];
        view()->share('navbar', $navbar);
        return $next($request);
    }
}
