<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index(){
        $produks = ProdukModel::with('kategori')->latest()->get(); 
        
        return view('produk.index', compact('produks'));
    }
     
    public function create(){
        $kategoris = Kategori::all();
        return view('produk.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'id_kategori' => 'required|integer|exists:kategori,id', 
            'qty' => 'required|integer',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
        ]);

        ProdukModel::create($request->all());

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil ditambahkan brok');        
    }
    
    public function edit(ProdukModel $produk)
    {
        $kategoris = Kategori::all();
        return view('produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, ProdukModel $produk)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'id_kategori' => 'required|integer|exists:kategori,id',
            'qty' => 'required|integer',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil diperbarui brok');        
    }

    public function destroy(ProdukModel $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil dihapus brok');        
    }    
}