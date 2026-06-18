<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Beras Premium 5kg',
                'description' => 'Beras kualitas terbaik dengan tekstur pulen dan wangi alami. Cocok untuk makan sehari-hari.',
                'price' => 75000,
                'stock' => 100,
                'image' => null,
            ],
            [
                'name' => 'Minyak Goreng Bimoli 2L',
                'description' => 'Minyak goreng berkualitas tinggi, kaya akan vitamin dan baik untuk kesehatan. Bebas kolesterol jahat.',
                'price' => 32000,
                'stock' => 50,
                'image' => null,
            ],
            [
                'name' => 'Gula Pasir 1kg',
                'description' => 'Gula pasir putih bersih dengan kadar sakarosa tinggi. Manis alami, cocok untuk minuman dan masakan.',
                'price' => 18000,
                'stock' => 80,
                'image' => null,
            ],
            [
                'name' => 'Telur Ayam 1/2 Kg (10 butir)',
                'description' => 'Telur ayam segar dari peternakan terpercaya. Kaya protein dan sangat baik untuk kesehatan.',
                'price' => 25000,
                'stock' => 40,
                'image' => null,
            ],
            [
                'name' => 'Susu UHT Full Cream 1L',
                'description' => 'Susu UHT dengan rasa lezat dan kaya kalsium. Baik untuk pertumbuhan tulang dan kesehatan gigi.',
                'price' => 22000,
                'stock' => 60,
                'image' => null,
            ],
            [
                'name' => 'Snack Coklat Wafer 200g',
                'description' => 'Camilan lezat dengan lapisan coklat creamy dan renyah. Sempurna untuk teman minum teh atau kopi.',
                'price' => 15000,
                'stock' => 120,
                'image' => null,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}