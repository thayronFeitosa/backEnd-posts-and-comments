<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{

    protected function redirectTo($request)
    {
        throw new HttpResponseException(
            response()->json(
                ['error' => 'Usuário não autorizado'],
                JsonResponse::HTTP_UNAUTHORIZED
            )
        );
    }
}
