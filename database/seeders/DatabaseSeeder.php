<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            ArticleSeeder::class,
            ProductSeeder::class,
            GallerySeeder::class,
            CompanyProfileSeeder::class,
        ]);
    }
}