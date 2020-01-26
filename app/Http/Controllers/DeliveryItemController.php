<?php

namespace App\Http\Controllers;

use App\DeliveryItem;
use Illuminate\Http\Request;

class DeliveryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveryitems = DeliveryItem::select('delivery_items.*', 'items.number', 'items.name', 'items.size','items.color', 'items.amount')
            ->where('corporation_id', Auth::id())
            ->join('items', 'items.id','=','delivery_items.item_id')
            ->get();
        return view('deliveryitem/index', ['deliveryitems' => $cartitems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DeliveryItem::updateOrCreate(
            [
                'corporation_id' => $request->post('item_id'),
                'item_id' => $request->post('item_id'),
            ],
            [
                'quantity' => \DB::raw('quantity +' . $request->post('quantity')),
            ]
            
            );
            return redirect('/item/index')->with('flash_message', '出荷リストに追加しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryItem $deliveryItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryItem $deliveryItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryItem $deliveryItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryItem $deliveryItem)
    {
        //
    }
}
