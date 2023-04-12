<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Setting::truncate();

        Setting::create([
            'front_logo' => 'backend/setting/front_logo.jpg',
            'back_logo' => 'backend/setting/back_logo.jpg',
            'copyright' => 'Baobab Property Services',
        ]);
        
    }
}
