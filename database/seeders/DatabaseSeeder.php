<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class, //fake
            WordSeeder::class, //fake
            Translation_voteSeeder::class, //fake
            TranslationSeeder::class, //fake
            Word_comment_voteSeeder::class, //fake
            Word_commentSeeder::class, //fake
            LanguagesSeeder::class, //real
            Word_statusSeeder::class, //real
            User_roleSeeder::class, //real
        ]);
    }
}
