<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Translation_statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        translation_status::firstOrCreate(["status" => 'active']);
        translation_status::firstOrCreate(["status" => 'onCheck']);
        translation_status::firstOrCreate(["status" => 'inactive']);
    }
}
