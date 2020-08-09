<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PertanyaanController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required'
        ]);
        $query = DB::table('posts')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return redirect('/pertanyaan/create');
    }
    public function index()
    {
        $posts = DB::table('posts')->get();
        //dd($posts);

        return view('posts.index', compact('posts'));
    }
}
