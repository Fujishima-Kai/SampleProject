<?php

namespace App\Http\Controllers;

use App\Corporation;

use Illuminate\Http\Request;

class CorporationController extends Controller
{
    public function index()
    {
        $corporations = Corporation::all();
        return view('corporations.list', ['corporations' => $corporations]);
    }


    public function create()
    {
        return view('corporations.create');
    }

    public function store(Request $request)
    {
        $corporations = new Corporation;
        $corporations->fill($request->all());
        $corporations->timestamps = false;
        $corporations->save();
        return redirect('/corporation');
    }


    public function edit($id){
        $post = Post::find($id);
        return View::make('posts.edit')
            ->with('post', $post);
    }
}





