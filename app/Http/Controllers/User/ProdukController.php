<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    //
    public function index()
    {
        
        $produk = Produk::allProduk();
        
        return view("user/produk/list_produk", ['produk' => $produk]);
    }

    public function detail($idProduk){
        $produk = Produk::detailProduk($idProduk);

        return view("user/order/form_order", compact("produk"));
    }

}
