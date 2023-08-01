<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Word_statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        word_status::firstOrCreate(["status" => 'active']);
        word_status::firstOrCreate(["status" => 'onCheck']);
        word_status::firstOrCreate(["status" => 'inactive']);
    }
}
