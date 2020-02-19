<?php

namespace App\Http\Controllers;

use App\Item;
use App\DeliveryItem;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($id);
        if($request->has('keyword')) {
            //dd($request->get('keyword'));
            $items = Item::where('name', 'like', '%'.$request->get('keyword').'%')->paginate(6);
        }else{
            $items = Item::paginate(6);
        }
        return view('item.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/item/additem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->fill($request->all());
        $item->timestamps = false;
        $item->save();
        return view('item.index');
    }


    public function chooseQuantity(Request $request, $id)
    {
        $validater = $request->validate([
            'quantity' => 'required|numeric',
            'markup_ratio' => 'required|numeric',
            'item_id' => 'required|numeric',
        ]);
        $delivery = new DeliveryItem;
        $delivery->corporation_id = $id;
        $delivery->item_id = $validater['item_id'];
        $delivery->quantity = $request['quantity'];
        $delivery->markup_ratio = $request['markup_ratio'];
        $delivery->save();
        return redirect("/item/index/$id")->with('message', '出荷リストに追加しました');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
