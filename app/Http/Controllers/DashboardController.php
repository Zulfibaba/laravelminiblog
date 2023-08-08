<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    public function show_post(Request $request)
    {
        // $posts = Post::all();

        $userid = $request->user()->id;
        $posts = Post::where('user_id', $userid)->get();
        return view('dashboard', ['posts' => $posts]);
    }
}
