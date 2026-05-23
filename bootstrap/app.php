<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\{Exceptions, Middleware};

use App\Http\Middleware\NamaMiddleware; //jangan lupa import nama middlewarenya.

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // berikan sebuah kunci, agar manggil middlewarenya ga terlalu panjang.

        $middleware->alias([
            'nama' => NamaMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
