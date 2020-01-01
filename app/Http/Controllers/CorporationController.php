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
        $post = new Corporation;
        $form = $request->all();
        unset($form['_token']);
        $new_corporation->fill($form)->save();
        return redirect()->route('corporations.list');
    }
}

