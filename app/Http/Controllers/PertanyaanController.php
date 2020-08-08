<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
