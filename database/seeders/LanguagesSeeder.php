<?php

namespace Database\Seeders;

use App\Models\language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        language::firstOrCreate(["language_code" => 'ru']);
        language::firstOrCreate(["language_code" => 'en']);
        language::firstOrCreate(["language_code" => 'fr']);
        language::firstOrCreate(["language_code" => 'ja']);
    }
}
