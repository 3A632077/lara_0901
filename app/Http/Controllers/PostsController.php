<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($id)
    {
        $data = ['id' => $id];

        return view('posts.show', $data);
    }
    public function store(PostRequest$request)
    {
        //
    }
    public function update(PostRequest$request)
    {
        //
    }

}
