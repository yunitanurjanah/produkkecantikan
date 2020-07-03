<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    protected $table = "produk";

    public static function allProduk()
    {
    	return Produk::all();
    }

    public static function detailProduk($idProduk)
    {
    	return Produk::findOrFail($idProduk);
    }

    public static function addEditProduk($idProduk, $namaProduk, $price)
    {
    	$produk = Produk::where("id",$idProduk)->first();

    	if ($produk == null) {
    		$produk = new Produk();
    	}
    	
    	$produk->nama_produk	= $namaProduk;
        $produk->harga_produk	= $price;
        $produk->gambar_produk  = "kosong";
    	$produk->save();

    	return $produk;
    }

    public function deleteProduk($idProduk)
    {
        $produk = Produk::findOrFail($idProduk);                                
        $produk->delete();

        return $idProduk;

    }
}
