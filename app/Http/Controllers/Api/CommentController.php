<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
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
        $comment = Comment::where('user_id', $datauser)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();


        if($comment) {
            $post = Post::where('id', $comment[0]->post_id)->get();
            return response()->json([ 'comment'=>$comment, 'post'=>$post]);

        }

        return response()->json($comment);
    }
}
