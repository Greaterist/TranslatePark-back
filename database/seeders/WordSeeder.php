<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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
                'status_id' => 1,
                'word' => fake()->word(),
                'language_id' => numberBetween(0, 2),
                'phonetic' => fake()->word(),
                'creator_id' => numberBetween(0, 10),
            ];
        }
        return $data;
    }
}
