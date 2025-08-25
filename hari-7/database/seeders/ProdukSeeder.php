<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;


class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'nama' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'kategori' => 'Makanan Berat',
            'stok' => 20,
        ]);

        Produk::create([
            'nama' => 'Ayam Geprek',
            'harga' => 20000,
            'kategori' => 'Makanan Berat',
            'stok' => 15,
        ]);
    }
}

