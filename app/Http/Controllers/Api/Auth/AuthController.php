<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\JsonResponse;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private const USERNAME_FIELD = 'email';
    private const PASSWORD_FIELD = 'password';
    private const FAILURE_MESSAGE = 'E-mail ou senha inválidos';

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(AuthRequest $request): JsonResponse
    {
        $credentials = $request->only([self::USERNAME_FIELD, self::PASSWORD_FIELD]);
        $token = Auth::attempt($credentials);
        return !$token
            ? response()->json(['error' => self::FAILURE_MESSAGE], 401)
            : $this->respondWithToken($token, $request);
    }

    public function respondWithToken(string $token): JsonResponse
    {

        $user = User::where('id', Auth::user()->id)->get();

        return response()->json([
            'user' => $user,
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 3600
        ]);
    }

    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(Auth::refresh());
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([]);
    }
}
