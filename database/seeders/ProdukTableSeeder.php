<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdukModel;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ProdukModel::create([
            'nama' => 'Piring',
            'id_kategori' => 1,
            'qty' => 12,
            'harga_beli' => 50000,
            'harga_jual' => 540000,
        ]);
        ProdukModel::create([
            'nama' => 'Sendok',
            'id_kategori' => 1,
            'qty' => 12,
            'harga_beli' => 40000,
            'harga_jual' =>450000,
        ]);
    }
}
