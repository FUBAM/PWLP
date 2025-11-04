<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create(
            [
            'nama_kategori' => 'Peralatan Dapur',
            'deskripsi' => 'Berisi perlengkapan seperti piring, sendok, gelas, dan alat masak lainnya.',]);
        Kategori::create(
            [
            'nama_kategori' => 'Elektronik Rumah',
            'deskripsi' => 'Produk seperti blender, rice cooker, setrika, kipas angin, dan sebagainya.',]);
        Kategori::create(
            [
            'nama_kategori' => 'Alat Kebersihan',
            'deskripsi' => 'Produk seperti sapu, pel, ember, kain lap, dan deterjen.',]);
        Kategori::create(
            [
            'nama_kategori' => 'Makanan & Minuman',
            'deskripsi' => 'Makanan ringan, minuman kemasan, dan bahan dapur instan.',]);
        Kategori::create(
            [
            'nama_kategori' => 'Perlengkapan Pribadi',
            'deskripsi' => 'Sabun, shampo, pasta gigi, dan perlengkapan mandi lainnya.',]);
        Kategori::create(
            [
            'nama_kategori' => 'Alat Tulis & Kantor',
            'deskripsi' => 'Buku, pensil, pulpen, kertas, dan peralatan kantor.',]);
    }
}
