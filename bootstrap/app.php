<?php

use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        using: function () {
            Route::middleware('web')
            ->group(base_path('routes/web.php'));

            Route::middleware('web')
            ->group(base_path('routes/auth.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append('')->alias(['admin' => '\App\Http\Middleware\EnsureUserIsAdmin']);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
