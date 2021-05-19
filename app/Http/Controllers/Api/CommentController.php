<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(CommentRequest $request): JsonResponse
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        return response()->json(Comment::create($data), 201);
    }

    public function lastCommented()
    {
        $datauser = Auth::user()->id;
        $b = Comment::where('user_id', $datauser)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();

        return response()->json($b);
    }
}
