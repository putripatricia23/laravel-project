<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;


class TokoController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('beranda', compact('produk'));
    }

    public function create()
    {
        return view('after_beli');
    }
}
