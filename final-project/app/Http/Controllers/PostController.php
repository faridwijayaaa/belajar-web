<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title'     => 'required',
            'imgUrl'    => 'required',
            'content'       => 'required',
            'author'    => 'required',
        ]);

        Post::create([
            'title' => $req->title,
            'imgUrl' => $req->imgUrl,
            'content' => $req->content,
            'author' => $req->author,
        ]);

        return redirect('/post');
    }

    public function detail($id)
    {
        $data['posts'] = DB::table('posts')->where('id', $id)->get();
        return view('detail', $data);
    }
}