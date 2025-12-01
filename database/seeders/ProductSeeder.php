<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan mengimport Model Product

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'sku' => 'WID-001',
            'name' => 'Wireless Mouse',
            'stock' => 150,
            'description' => 'Mouse ergonomis nirkabel dengan koneksi Bluetooth dan USB. Ideal untuk penggunaan sehari-hari.',
        ]);

        Product::create([
            'sku' => 'KB-PRO',
            'name' => 'Mechanical Keyboard Pro',
            'stock' => 75,
            'description' => 'Keyboard mekanikal premium dengan switch taktil dan lampu RGB yang dapat dikustomisasi.',
        ]);

        Product::create([
            'sku' => 'MON-27-QHD',
            'name' => 'Monitor 27-inch QHD',
            'stock' => 40, // Sengaja stok rendah untuk badge merah
            'description' => 'Monitor gaming 27 inci resolusi QHD (2560x1440) dengan refresh rate 144Hz.',
        ]);

        Product::create([
            'sku' => 'SSD-1TB-NVME',
            'name' => 'SSD NVMe 1TB Gen4',
            'stock' => 200,
            'description' => 'Solid State Drive NVMe berkecepatan tinggi, cocok untuk sistem operasi dan game.',
        ]);
    }
}
