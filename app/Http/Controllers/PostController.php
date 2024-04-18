<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $allposts = DB::table('posts')->get();
        // dd($allposts);
        return view('post.index', [
            'allposts' => $allposts
        ]);
    }

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {

        DB::table('posts')->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = DB::table('posts')->find($id);
        return view('post.show', ['post' => $post]);
    }


    public function edit($id)
    {
        $post = DB::table('posts')->find($id);
        return view('post.edit', ['post' => $post]);
    }


    public function update(Request $request, $id)
    {
        DB::table('posts')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
      DB::table('posts')->delete($id);
        return redirect()->route('posts.index');
    }
}
