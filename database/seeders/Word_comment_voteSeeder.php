<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Word_comment_voteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('word_comment_votes')->insert($this->getData());
        $this->getData();
    }

    private function getData()
    {
        
        $faker = Faker::create('ru_RU');

        $data = [];
        for ($i=0; $i<50;$i++){
            $data[] = [
                'user_id' => fake()->numberBetween(0, 10),
                'word_comment_id' => fake()->numberBetween(0, 50),
                'isPositive' => fake()->boolean(50),
            ];
        }
        return $data;
    }
}
