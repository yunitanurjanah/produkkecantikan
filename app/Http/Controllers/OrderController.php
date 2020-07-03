<?php

namespace App\Http\Controllers;

use App\Order;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $order = DB::table('order')
            ->join('produk', 'order.id_produk', '=', 'produk.id')
            ->select('order.*', 'produk.nama_produk', 'produk.harga_produk')
            ->get();

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
        // $order = Order::detailOrder($order);

        // $produk= Produk::all();
        $order = Order::editOrder($order);
        // print_r($order);
        // die();

        return view("admin/order/form_edit_order", ['order' => $order]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return "saya";
        //
        $request->validate([
            'id'        => 'required',
            'no_order'  => 'required',
            'name'      => 'required',
            'phone'     => 'required'
        ]);

        $id         = $request->input('id');
        $no_order   = $request->input('no_order');
        $id_produk  = $request->input('id_produk');
        $name       = $request->input('name');
        $phone      = $request->input('phone');
        $address    = $request->input('phone');

        $order = new Order();
        $order->addEditOrder($id, $id_produk, $name, $phone, $address, $no_order);

        return redirect("/order");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($idorder)
    {
        //
        $order = new Order();
        $order->deleteOrder($idorder);

        return redirect("/order");
    }
}
