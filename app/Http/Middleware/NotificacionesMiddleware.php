<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class NotificacionesMiddleware extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    public function handle($request, Closure $next){
        $num_notificaciones = 4;
        $otra_notificacion = 'Nuevo Mensaje';
     
        view()->share(compact('num_notificaciones', 'otra_notificacion'));
        return $next($request);
     }

    }