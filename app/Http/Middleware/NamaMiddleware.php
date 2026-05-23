<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Closure;
use Symfony\Component\HttpFoundation\Response;

class NamaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // berikan sebuah aturan, ibarat seperti pengecekan di ruang security

        $umur = 20;

        if ($umur >= 20) {
            return $next($request); // perintah untuk mengizinkan akses ke halaman yang akan dituju.
        }

        Route::redirect()->route('route-belajar');

    }
}
