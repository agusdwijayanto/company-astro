<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Belanja Kebutuhan Sehari-hari Jadi Lebih Mudah dengan Astro',
                'content' => 'Astro hadir sebagai solusi belanja kebutuhan sehari-hari yang cepat dan praktis. Dengan pengiriman hanya dalam 15 menit, Anda tidak perlu lagi repot keluar rumah. Cukup pesan melalui aplikasi atau website, dan pesanan Anda akan segera diantar ke depan pintu.',
                'status' => 'published',
                'image' => null,
            ],
            [
                'title' => '5 Tips Memilih Sayuran Segar untuk Keluarga',
                'content' => 'Memilih sayuran segar memang perlu ketelitian. Pastikan warna sayuran cerah, tidak layu, dan tidak ada bercak hitam. Astro selalu memilih supplier terbaik untuk memastikan kualitas sayuran yang kami kirimkan kepada pelanggan tetap segar dan bergizi.',
                'status' => 'published',
                'image' => null,
            ],
            [
                'title' => 'Promo Spesial Akhir Tahun di Astro! Diskon Hingga 50%',
                'content' => 'Nikmati promo akhir tahun dengan diskon besar-besaran untuk produk pilihan. Dapatkan voucher belanja gratis dan penawaran menarik lainnya. Promo berlaku terbatas, jangan sampai kehabisan!',
                'status' => 'published',
                'image' => null,
            ],
            [
                'title' => 'Cara Mudah Menggunakan Aplikasi Astro untuk Pemula',
                'content' => 'Bagi Anda yang baru pertama kali menggunakan Astro, prosesnya sangat mudah. Unduh aplikasi, daftar akun, pilih produk favorit Anda, dan selesaikan pembayaran. Tim kurir kami akan segera mengantar pesanan Anda dalam waktu singkat.',
                'status' => 'draft',
                'image' => null,
            ],
            [
                'title' => 'Astro Hadir di Kota Tangerang!',
                'content' => 'Kami dengan senang hati mengumumkan bahwa Astro kini telah hadir di wilayah Tangerang dan sekitarnya. Kini lebih banyak pelanggan yang dapat menikmati kemudahan belanja kebutuhan sehari-hari dengan pengiriman cepat.',
                'status' => 'published',
                'image' => null,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}