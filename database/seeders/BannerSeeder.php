<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Banner::truncate();

        Banner::create([
            'title' => 'Find Your Best Property',
            'sub_title' => 'Short description goes here....',
            'image' => 'backend/banner/banner.jpg'
        ]);

    }
}
