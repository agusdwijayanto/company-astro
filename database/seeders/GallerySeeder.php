<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Toko Astro Jakarta',
                'description' => 'Tampilan depan toko Astro di Jakarta yang modern dan bersih, siap melayani pelanggan.',
                'image' => '',  // <-- DIUBAH MENJADI STRING KOSONG
            ],
            [
                'title' => 'Tim Kurir Astro',
                'description' => 'Tim kurir Astro yang sigap dan profesional siap mengantarkan pesanan tepat waktu.',
                'image' => '',  // <-- DIUBAH
            ],
            [
                'title' => 'Produk Segar di Astro',
                'description' => 'Berbagai macam produk segar tersedia di Astro mulai dari sayuran, buah-buahan, hingga daging.',
                'image' => '',  // <-- DIUBAH
            ],
            [
                'title' => 'Suasana Belanja di Astro',
                'description' => 'Suasana belanja yang nyaman dan rapi di toko Astro dengan berbagai pilihan produk.',
                'image' => '',  // <-- DIUBAH
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}