<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|url',
            'body' => 'required|min:3|max:500'
        ]);
        $user = $request->user();
        $post = new post;

        $post->title = $request->title;
        $post->body = $request->body;
        $user->post()->save($post);
        return redirect(route('post_index'))->with('status', 'Post Added');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('editpost', ['post' => $post]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect(route('dashboard'))->with('status', 'Post Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect(route('dashboard'))->with('status', 'Post Deleted!!');
    }
}
