<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Produk;

class Order extends Model
{
    //
    protected $table = "order";

    public static function allOrder()
    {
    	return Order::with("produklist")->get();
    }

    public static function detailOrder($idOrder)
    {
    	return Order::findOrFail($idOrder);
    }

    public static function editOrder($idOrder)
    {
    	return Order::where('id', $idOrder)->with('produklist')->first();
    }

    public static function addEditOrder($idOrder, $idProduk, $namaUser, $noHpUser, $addressUser, $noOrder)
    {
    	$order = Order::where('id', $idOrder)->first();

    	if ($order == null) {
            $order = new Order();
            $random1    = random_int(0,1000);
            $random2    = random_int(0,1000);
            $random3    = random_int(0,100);
            $order->no_order        = $random1." ".$random2." ".$random3;
        
        }else{
            $order->no_order        = $noOrder;
        }
        
        
    	$order->id_produk		= $idProduk;
    	$order->nama_user		= $namaUser;
    	$order->no_hp_user		= $noHpUser;
        $order->address_user	= $addressUser;
        
    	$order->save();

    	return $order;
    }

    public function deleteOrder($idOrder)
    {
        $order = Order::findOrFail($idOrder);                                
        $order->delete();

        return $idOrder;

    }

    public function produklist()
    {
        return $this->hasMany("App\Produk", "id", "id_produk");
    }

}
