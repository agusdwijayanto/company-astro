<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyProfile;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        CompanyProfile::create([
            'company_name' => 'PT Astro Technologies Indonesia',
            'description' => 'Astro adalah startup quick commerce yang berkomitmen memberikan solusi belanja kebutuhan sehari-hari dengan pengiriman cepat dalam 15 menit. Kami hadir untuk memudahkan masyarakat Indonesia berbelanja tanpa ribet.',
            'address' => 'Jl. Astro No. 123, Jakarta Selatan, DKI Jakarta 12120',
            'phone' => '(021) 1234-5678',
            'email' => 'info@astro.com',
            'logo' => null,
        ]);
    }
}