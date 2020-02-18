<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Corporation;

use Illuminate\Http\Request;

class CorporationController extends Controller
{


    public function admin()
    {
        $corporations = Corporation::all();
        return view('corporations.admin', ['corporations' => $corporations]);
    }



    public function index(Request $request)
    {
        if($request->has('keyword')) {
            //dd($request->get('keyword'));
            $corporations = Crporations::where('name', 'like', '%'.$request->get('keyword').'%');
        }else{
            $corporations = Corporation::all();
        }
        return view('corporations.index', ['corporations' => $corporations]);
    }

    // public function backToList()
    // {
    //     return redirect('corporations.index');
    // }

    public function show()
    {
        return view('corporations.show', ['corporation' => $corporation]);
    }

    public function create()
    {
        return view('corporations.create');
    }

    public function store(Request $request)
    {
        $validater = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $corporations = new Corporation;
        $corporations->fill($request->all());
        $corporations->timestamps = false;
        $corporations->save();
        return redirect('/corporations/index');
    }



    public function edit($id){
        $data = Corporation::find($id);
        return view('corporations.edit')->with('data', $data);
    }

    public function update(Request $request,$id)
    {
        $validater = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $data = Corporation::find($id);
        // リクエストデータ受取
        $form = $request->all();
        // フォームトークン削除
        unset($form['_token']);
        $data->timestamps = false;
        // レコードアップデート
        $data->fill($form)->save();
        return redirect('/corporations/index');
    }

    public function delete($id){
        //削除対象レコードを検索
        $data = Corporation::find($id);
        //削除
        $data->delete();
        //リダイレクト
        $corporation = Corporation::all();
        return redirect('/corporation')->with('corporation', $corporation);
        }


        public function selectDelivery()
        {
            $corporations = Corporation::all();
            return view('corporations.selectdelivery', ['corporations' => $corporations]);
        }
    




}
