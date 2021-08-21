<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function self()
    {
        $user = $this->authUser();
        return $user->posts;
    }

    public function store(Request $request)
    {
        $detail = $request->only(['title', 'body']);
        $user = $this->authUser();
        $post = $user->posts()->create($detail);
        return $post;
    }
}
