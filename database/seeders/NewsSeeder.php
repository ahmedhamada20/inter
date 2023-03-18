<?php

namespace Database\Seeders;

use App\Models\News;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        DB::table('academics')->truncate();

        for ($i = 1; $i <= 3; $i++) {
            News::create([
                'name' => $faker->name(),
                'by_name' => $faker->name(),
                'by_category' => $faker->name(),
                'notes' => $faker->name(),
            ]);
        }
    }
}
