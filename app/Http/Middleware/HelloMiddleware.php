<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name' => 'taro', 'mail' => 'taro@hoge.com'],
            ['name' => 'jiro', 'mail' => 'jiro@foo.com'],
            ['name' => 'george', 'mail' => 'george@bar.com'],
        ];
        $request -> merge(['data' => $data]);
        return $next($request);
    }
}
