<?php

namespace App\Http\Controllers;

    use App\Models\Post;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    //
    public function index()
    {
        $daftar_post = DB::table('posts')->where('judul', '<>', 'php')->get();
        return view('admin.index', ['posts' => $daftar_post]);
    }

    public function index2()
    {
        $daftar_menu = DB::table('tbmenu')->get();
        return view('admin.template', ['menus' => $daftar_menu]);
    }

    public function detail($id)
    {
        $data['post'] = DB::table('posts')->where('id', $id)->get();
        return view('admin.detail', $data);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'judul'     => 'required',
            'isi'       => 'required',
            'author'    => 'required'
        ]);

        Post::create([
            'judul' => $req->judul,
            'isi' => $req->isi,
            'author' => $req->author
        ]);
        return redirect('/admin');
    }

    public function editArtikel($id)
    {
        $data['post'] = DB::table('posts')->where('id', $id)->get();
        return view('admin.editArtikel', $data);
    }

    public function updated($id, Request $req)
    {
        $req->validate([
            'judul'     => 'required',
            'isi'       => 'required',
            'author'    => 'required'
        ]);

        $findArt = Post::find($id);
        $findArt->update($req->all());
        return redirect('/admin');
    }

    public function deleteArtikel($id)
    {
        $findArt = Post::find($id);
        $findArt->delete();
        return redirect('/admin');
    }
}