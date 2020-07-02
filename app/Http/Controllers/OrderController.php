<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order = Order::allOrder();
        // foreach($order as $order1){
        //     print_r($order1->id_produk[0]->nama_produk);
        // }
        print_r($order);
        die();
        return view("admin/order/list_order", ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("user/order/form_add_order");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'nama_user'     => 'required',
            'no_hp_user'    => 'required',
            'address_user'  => 'required'
        ]);

        $nama_user   = $request->input('nama_user');
        $no_hp_user  = $request->input('no_hp_user');
        $address_user  = $request->input('address_user');

        $order = new Order();
        $order->addEditOrder('',$nama_user, $no_hp_user, $address_user);

        return redirect("/order");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($order)
    {
        //
        $order = new Order();
        $order->detailOrder($order);

        return view("admin/order/form_edit_order", $order);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
