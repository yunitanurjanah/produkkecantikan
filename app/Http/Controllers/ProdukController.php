<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view("kota.index");
        $produk = Produk::allProduk();
        
        return view("admin/produk/list_produk", ['produk' => $produk]);
    }

    public function listProduk()
    {
        $produk = Produk::allProduk();
        return datatables()->of($produk)
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin/produk/form_add_produk");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        
        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        $name   = $request->input('name');
        $price  = $request->input('price');

        $produk = new Produk();
        $produk->addEditProduk('',$name, $price);

        return redirect("/produk");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($idproduk)
    {
        //
        $produk = Produk::detailProduk($idproduk);
        
        return view("admin/produk/form_edit_produk", compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $request->validate([
            'id'    => 'required',
            'name'  => 'required',
            'price' => 'required'
        ]);

        $id     = $request->input('id');
        $name   = $request->input('name');
        $price  = $request->input('price');

        $produk = new Produk();
        $produk->addEditProduk($id,$name, $price);

        return redirect("/produk");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($idproduk)
    {
        //

        $produk = new Produk();
        $produk->deleteProduk($idproduk);

        return redirect("/produk");
    }
}
