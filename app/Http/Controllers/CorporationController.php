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


    public function show()
    {
        return view('corporation.show');
    }


    public function select(Request $request)
    {
        $id->fill($request->all());
        return redirect('/corporation.edit{$id}');
    }


    public function edit($id){
        $data = Corporation::find($id);
        return view('corporations.edit')->with('data', $data);
    }
}
