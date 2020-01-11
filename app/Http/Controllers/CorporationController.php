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
        $data = Corporation::find($id);
        return view('corporations.edit')->with('data', $data);
    }

    public function update(Request $request,$id)
    {

        $data = Corporation::find($id);
        // リクエストデータ受取
        $form = $request->all();
        // フォームトークン削除
        unset($form['_token']);
        $data->timestamps = false;
        // レコードアップデート
        $data->fill($form)->save();
        return redirect('/corporation');
    }

    public function delete($id){
        //削除対象レコードを検索
        $data = Corporation::find($id);
        //削除
        $data->delete();
        //リダイレクト
        $corporation = Corporation::all();
        return redirect('/corporation');
        }
}
