<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('produk')->insert([
            'gambar_produk' => Str::random(10),
            'nama_produk' => Str::random(10),
            'harga_produk' => random_int(0,1000000)
        ]);
    }
}
