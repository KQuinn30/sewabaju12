<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function getData()
    {
        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Panda Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Sepatu Cinderlla', 'harga' => 30000],
        ];

        return $dataBarang;
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('produk_barang', compact('data'));
    }
}

