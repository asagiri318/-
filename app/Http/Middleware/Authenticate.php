<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
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
        // ユーザーがログインしているかどうかを確認します
        if (!Auth::check()) {
            // ユーザーがログインしていない場合は、ログインページにリダイレクトします
            return redirect()->route('login');
        }

        // ユーザーがログインしている場合は、次のミドルウェアまたはリクエストハンドラに進みます
        return $next($request);
    }
}
