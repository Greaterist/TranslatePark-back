<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TranslationSeeder extends Seeder
{
    /**
     * DONE
     */
    public function run(): void
    {
        DB::table('translations')->insert($this->getData());
        $this->getData();
    }

    private function getData()
    {
        
        $faker = Faker::create('ru_RU');

        $data = [];
        for ($i=0; $i<3;$i++){
            $data[] = [
                'first_word_id' => fake()->numberBetween(0, 50),
                'second_word_id' => fake()->numberBetween(0, 50),
                'status_id' => 1,
            ];
        }
        return $data;
    }
}
