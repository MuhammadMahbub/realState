<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Contact::truncate();

        Contact::create([
            'address' => '191 Mwai Kibaki Road, Kawe Beach, Dar es salaam.',
            'mail' => 'info@bps.com',
            'mobile' => '+255 763 210 607',
            'phone' => '+255 763 210 607',
        ]);
    }
}
