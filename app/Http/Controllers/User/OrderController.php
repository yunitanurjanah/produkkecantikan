<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Produk;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //

	public function index()
    {
        
        $order = DB::table('order')->latest()->first();
        $produk = Produk::findOrFail($order->id_produk);
            $data = array(
                "no_order" => $order->no_order,
                "nama_produk"   => $produk->nama_produk,
                "harga_produk"  => $produk->harga_produk
            );
        
        // print_r($data['nama_produk']);
        // die();
        return view("user/order/form_success_order",compact("data"));
        // return "saya";
    }

    public function store(Request $request)
    {
        //
    	// return "saya";
        $request->validate([
            'nama_user'     => 'required',
            'no_hp_user'    => 'required',
            'address_user'  => 'required',
            'id_produk'		=> 'required'
        ]);

        $nama_user   	= $request->input('nama_user');
        $no_hp_user  	= $request->input('no_hp_user');
        $address_user  	= $request->input('address_user');
        $id_produk		= $request->input('id_produk');
        print_r($id_produk);

        $order = new Order();
        $order->addEditOrder('',$id_produk,$nama_user, $no_hp_user, $address_user,'');

        return redirect("/informasiOrder");
    }
}
