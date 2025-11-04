<?php

namespace App\Http\Controllers;

use App\Models\KaryawanModel;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = KaryawanModel::latest()->paginate(5);
        return view('karyawan.index', compact('karyawan'));
    }

    public function create(){
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tmp_lahir' => 'required',
        'tgl_lahir' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        ]);

        KaryawanModel::create($request->all());

        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan Success Ditambahkan');
    }

    public function show($id)
    {
        $karyawan = KaryawanModel::find($id);
        return view('karyawan.detail', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = KaryawanModel::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        KaryawanModel::find($id)->update($request->all());

        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan Success Diupdate');
    }

    public function destroy($id)
    {
        KaryawanModel::find($id)->delete();
        return redirect()->route('karyawan.index')
            ->with('success', 'Karyawan Berhasil Dihapus');
    }
}