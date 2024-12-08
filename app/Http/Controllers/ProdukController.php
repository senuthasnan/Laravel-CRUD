<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = produk::all();
        return view('index', ['produk'  => $produk]);
    }

    public function create(){
        return view('create');
    }

    public function create_post(Request  $request){

        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'keterangan' => 'nullable',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $createProduct = produk::create($validatedData);

        return redirect()->route('index');
    }

    public function edit(produk $produk){
        return view('edit',['produk'  => $produk]);
    }

    public function update(produk $produk, Request $request){
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'keterangan' => 'nullable',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $produk->update($validatedData);
        return redirect()->route('index');
    }

    public function delete(produk $produk){
        $produk->delete();
        return redirect()->route('index');
    }
}
