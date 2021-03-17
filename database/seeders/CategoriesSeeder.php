<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(2,3)),
                'inform' => $faker->realText(rand(30, 40)),
            ];
        }
        return $data;
    }
}
