<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pesanan = Pesanan::with('produk')->get();
       return view('admin.pesanan.pesanan',compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesanan = Produk::all(); //ini karena di tabel produk ada tabel kategori
        return view('admin.pesanan.create',compact('pesanan')); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function push(Request $request)
    {
        $produk = new Pesanan;
        $produk->tanggal = $request->tanggal;
        $produk->nama = $request->nama;
        $produk->jumlah = $request->jumlah;
        $produk->produk_id = $request->produk;
        $produk->save();

        return redirect('/admin/pesanan');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = Pesanan::with('produk')->find($id);
        return view('admin.pesanan.show',compact('pesanan'));
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = Pesanan::with('produk')->find($id);
        $data_produk = Produk::all();// ini variabel buat naro kategori produk
        return view('admin.pesanan.edit',compact('pesanan','data_produk'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $update = Pesanan::find($request->id);
        $update->tanggal = $request->tanggal;
        $update->nama = $request->nama;
        $update->jumlah = $request->jumlah;
        $update->produk_id = $request->produk;
        $update->save();
 
        return redirect('/admin/pesanan');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();

       return redirect('admin/pesanan');
        
        //
    }

    public function pesan($id)
    {
        $produk = Produk::all()->find($id);
        return view('beli',compact('produk'));
        
        
        //
    }

    public function store(Request $request)
    {
        $store = new Pesanan;
        $store->tanggal = $request->tanggal;
        $store->nama = $request->nama;
        $store->jumlah = $request->jumlah;
        $store->produk_id = $request->id;
        $store->save();  
        return redirect('/after_beli');
        //
    }
}
