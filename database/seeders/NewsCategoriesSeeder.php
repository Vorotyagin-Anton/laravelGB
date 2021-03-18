<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_categories')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'news_id' => $i + 1,
                'category_id' => rand(6,10),
            ];
        }
        return $data;
    }
}
