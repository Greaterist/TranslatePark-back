<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Word_commentSeeder extends Seeder
{
    /**
     * DONE
     */
    public function run(): void
    {
        DB::table('words')->insert($this->getData());
        $this->getData();
    }

    private function getData()
    {
        
        $faker = Faker::create('ru_RU');

        $data = [];
        for ($i=0; $i<50;$i++){
            $data[] = [
                'text' => fake()->senence(6, true),
                'language_id' => fake()->numberBetween(0, 2),
                'creator_id' => fake()->numberBetween(0, 10),
                'word_id' => fake()->numberBetween(0, 50),
            ];
        }
        return $data;
    }
}
