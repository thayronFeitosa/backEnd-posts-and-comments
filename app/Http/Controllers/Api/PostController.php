<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(): JsonResponse
    {
            $size = Post::all();
        return response()->json(Post::orderBy('created_at', 'desc')->paginate(5));
        // return response()->json($size);
    }

    public function store(PostRequest $request): JsonResponse
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        return response()->json(Post::create($data), 201);
    }
}
