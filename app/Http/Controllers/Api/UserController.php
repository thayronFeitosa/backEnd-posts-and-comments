<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

  public function store(UserRequest $request): JsonResponse
  {
    return response()->json(User::create($request->all()), 201);
  }
}
