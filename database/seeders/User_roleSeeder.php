<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        word_status::firstOrCreate(["status" => 'user']);
        word_status::firstOrCreate(["status" => 'admin']);
        word_status::firstOrCreate(["status" => 'moderator']);
        word_status::firstOrCreate(["status" => 'banned']);
    }
}
