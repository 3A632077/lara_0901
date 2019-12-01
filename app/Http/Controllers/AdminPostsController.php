<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
class AdminPostsController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('created_at','DESC')->get();
        $data=['posts'=>$posts];
        return view('admin.posts.index',$data);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function edit($id)
    {
        $post=Post::find($id);
        $data=['post'=>$post];
        return view('admin.posts.edit',$data);
    }
    public function store(PostRequest $request)
    {
        //
    }
    public function update(PostRequest $request)
    {
        //
    }
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index');
    }

}
