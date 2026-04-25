<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Kemeja'],
            ['id' => 1, 'produk' => 'Baju Kaos'],
            ['id' => 1, 'produk' => 'Celana Panjang Kain'],
        ];

        return view('list_produk', compact('data'));
    }
}

abstract class Controller
{
    //
}

