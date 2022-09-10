<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $posts = Post::paginate(10);

        return response()->json($posts);
    }

    public function getByCategory($category_id)
    {
        $posts = Post::where(['category_id' => $category_id])->paginate(10);

        return response()->json($posts);
    }
}
